<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_API extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        session_start();
        $this->is_logged = 'NO';
        $this->user_id = '';

        if(isset($_SESSION['is_logged'])){
            $this->user_id = $_SESSION['user_id'];
            $this->is_logged = $_SESSION['is_logged'];
        }

    }

    public function index()
    {
        echo  "hello... USER_API....!!!";
    }

    public function m_registration()
    {
        if($this->is_logged == 'NO')
        {
          $this->index();
        }
        else
        {
          $data['is_logged'] = $this->is_logged;
          $data['user_id']  = $this->user_id;
          $data['pathname'] = 'm_registration';

          $this->load->model('db/metlife_emp_db', 'emp_db');
          $rslt = $this->emp_db->user_info($this->user_id);
          $data['user_info'] = $rslt;

          $data['flight_list'] = null;
          $condata['tour_id'] = '1';
          $condata['flight_ids'] = '';
          // $this->load->model('db/booking_db', 'booking_db');
          $this->load->model('db/tour_info_db', 'tour_db');
          $flight_ids = $this->tour_db->select_flight_ids($condata);
          $condata["flight_ids"] = $flight_ids [0];
          $data["flight_list"] = $this->tour_db->select_flight_list($condata);
          // print_r($flight_ids);
          // print_r($condata);
          // print_r($data);

          $this->load->view('user/m_registration',$data);
        }
    }

//---------------------------------------------------------------
// API
//---------------------------------------------------------------

    // public function logout()
    // {
        // // session_start();
        // session_destroy();
        // // $this->index();

    // }

    // public function login()
    // {
        // // session_start();

        // // $output[] = null;
        // $post = $this->input->post();
        // // print_r($post);

        // $this->load->model('db/metlife_emp_db', 'emp_db');

        // $userid   = $post['userid'];
        // $password = $post['password'];

        // // $this->load->database();
        // if($userid == "admin" || $userid == "metlife"){
          // $rslt = $this->emp_db->admin_login_in($userid, $password);
        // }else{
          // $rslt = $this->emp_db->user_login_in($userid, $password);
        // }

        // echo json_encode($rslt);

    // }

    public function booking()
    {
        $rslt[] = null;
        $post = $this->input->post();
        // print_r($post);
        // return;

        $in_data["booking_code"] = $post["tour_id"].$post["flight_id"].$post["user_id"];
        $in_data["tour_id"] = $post["tour_id"];

        $in_data["booking_dt"] = date("Y-m-d");
        $in_data["tour_dt"] = "";
        $in_data["flight_id"] = $post["flight_id"];

        $in_data["emp_no"] = $post["user_id"];

        $in_data["companion_id"] = 1;
        $in_data["companion_relation"] = "1";

        $in_data["name"] = $post["user_name"];
        $in_data["name_eng_first"] = "";
        $in_data["name_eng_last"] = "";

        $in_data["dob"] = $post["user_dob"];

        $today_yyyy = date("Y");
        $today_yy = substr(date("Y"), 2, 2);

        $b_yy = substr($in_data["dob"], 0, 2);
        $b_mm = substr($in_data["dob"], 2, 2);
        $b_dd = substr($in_data["dob"], 4, 2);

        if($today_yy > $b_yy)
            $b_yy = "19".$b_yy;
        else
            $b_yy = "20".$b_yy;

        $age = $this->getManNai($b_yy, $b_mm, $b_dd);

        $in_data["age"] = $age;
        $in_data["gender"] = 1;
        $in_data["mobile"] = "";
        $in_data["email"] = "";

        $in_data["passport_yn"] = 0;
        $in_data["passport_info"] = "";
        $in_data["passport_reg_dt"] = "";
        $in_data["passport_expire_dt"] = "";

        // 예약화면 정해지면 수정
        $in_data["grade"] = $post["tour_id"];
        $in_data["room_type"] = "";

        $in_data["companion_extra_cost"] = 0;
        $in_data["choice_tour_yn"] = 0;
        $in_data["choice_tour_confirm_yn"] = 0;
        $in_data["tour_cost"] = 0;
        $in_data["consult"] = "";

        $in_data["payment_yn"] = 0;
        $in_data["payment_no"] = "";
        $in_data["payment_mmyy"] = "";
        $in_data["payment_cvc"] = "";

        $this->load->model('db/tour_info_db', 'tour_db');
        $tour_info = $this->tour_db->select_tour_info($in_data["tour_id"]);
        $in_data["tour_dt"] = $tour_info["tour_dt"];

        // print_r($in_data);
        // return;

		$this->load->model('db/booking_db', 'booking_db');
		$rslt = $this->booking_db->insert_mpc_booking($in_data);

		if($rslt > 0)
		{
			$result["result"] = "success";
			$result["booking_id"] =  $rslt;

			/**
			 * 여권이미지 저장
			 */
			$data_salt = 'mpc2020';
			$config['upload_path']          = 'uploads/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 2048;

			$this->load->library('upload', $config);
			if ($this->upload->do_upload('passport')) 
			{
				$file_data = $this->upload->data();
				$in_data["booking_id"] = $rslt;
				$in_data["image_data"] = base64_encode(file_get_contents($file_data["full_path"]));
				$in_data["image_data_salt"] = $data_salt;
				$in_data["image_extension"] = $file_data["file_ext"];
				  
				$rslt = $this->booking_db->insert_mpc_booking_passport($in_data);

				if($rslt > 0)
				{
					$result["result"] = "success";
					$result["booking_id"] =  $in_data["booking_id"];
				 }
				 else
				 {
					$result["result"] = "fail";
				 }

				 // Remove uploaded file
				 //print_r($file_data["full_path"]);
				 unlink($file_data["full_path"]);
			}
		}
		else
		{
			$result["result"] = "fail";
		}

//$post["party_number"];
//$post["additional_pay_amount"];
//$post["paid_YN"];
//$post["credit_card"];
//$post["optional_tour"];
//$post["optional_tour_payment_YN"];
//$post["job_title"];
//$post["branch_name"];

        echo json_encode($result);
    }

    private function getManNai($birth_year, $birth_month, $brith_day)
    {
        // echo $birth_year .",". $birth_month .",". $brith_day;

        $birth_year = (int)$birth_year;
        $birth_month = (int)$birth_month;
        $brith_day = (int)$brith_day;

        $now_year = date("Y");
        $now_month = date("m");
        $now_day = date("d");

        if($birth_month < $now_month){
           $age = $now_year - $birth_year;
        }else if($birth_month == $now_month){
         if($brith_day <= $now_day)
          $age = $now_year - $birth_year;
         else
          $age = $now_year - $birth_year -1;
        }else{
           $age = $now_year - $birth_year-1;
        }
        return $age;
    }

}
