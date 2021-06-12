<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{

    protected $css_path = "/mgmt/css/";
    protected $js_path = "/mgmt/js/";

    protected $css = array();
    protected $js = array();

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
        $this->charts();
    }

    public function mgmt_list()
    {
        if($this->login_chk())
          return;

        $data['is_logged'] = $this->is_logged;
        $data['user_id'] = $this->user_id;
        $data['pathname'] = 'mgmt_list';
        $data['asset_root'] = '/mgmt/';

        $this->add_css($this->css_path."plugins/dataTables/datatables.min.css");
        $this->add_js($this->js_path."plugins/dataTables/datatables.min.js");

        $data['page_css'] = $this->render_css($this->css);
        $data['page_js']  = $this->render_js($this->js);

        $this->load->view('admin/mgmt_list',$data);
    }

    public function login_page()
    {
        $data['is_logged'] = $this->is_logged;
        $data['user_id'] = $this->user_id;
        $data['pathname'] = 'login';
        $data['asset_root'] = '/mgmt/';

        $this->load->view('admin/login',$data);
    }

    public function booking_list()
    {
        if($this->login_chk())
          return;

        $data['is_logged'] = $this->is_logged;
        $data['user_id'] = $this->user_id;
        $data['pathname'] = 'booking_list';
        $data['asset_root'] = '/mgmt/';

        $this->add_css($this->css_path."plugins/footable/footable.core.css");
        // $this->add_js($this->js_path."plugins/footable/footable.all.min.js");
        $this->add_js($this->js_path."plugins/footable/footable.all.js");

        // $this->add_js("https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js");
        $this->add_js($this->js_path."booking_list.js");

        $data['page_css'] = $this->render_css($this->css);
        $data['page_js']  = $this->render_js($this->js);

        $this->load->model('db/metlife_emp_db', 'emp_db');
        $data["group_code_list"] = $this->emp_db->select_group_code();
        $data["branch_code_list"] = $this->emp_db->select_branch_code();
        
        $this->load->view('admin/booking_list',$data);
    }

    public function charts()
    {
        if($this->login_chk())
          return;

        $data['is_logged'] = $this->is_logged;
        $data['user_id'] = $this->user_id;
        $data['pathname'] = 'charts';
        $data['asset_root'] = '/mgmt/';

        $this->add_css($this->css_path."plugins/c3/c3.min.css");
        $this->add_js($this->js_path."plugins/d3/d3.min.js");
        $this->add_js($this->js_path."plugins/c3/c3.min.js");

        // $this->add_js("https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js");
        // $this->add_js($this->js_path."booking_list.js");

        $data['page_css'] = $this->render_css($this->css);
        $data['page_js']  = $this->render_js($this->js);

        $this->load->view('admin/charts',$data);
    }
    
//---------------------------------------------------------------
// Function
//---------------------------------------------------------------
    public function login_chk()
    {
        if($this->is_logged == 'NO')
        {
            $this->login_page();
            return true;
        }
        else
        {
            return false;
        }
    }

    public function add_css($css, $option = array())
    {
        $obj_css["name"] = $css;
        $obj_css["option"] = $option;

        array_push($this->css, $obj_css);
    }

    public function add_js($js, $option = array())
    {
        $obj_js["name"] = $js;
        $obj_js["option"] = $option;

        array_push($this->js, $obj_js);
    }

    protected function render_css($css_list)
    {

        $html_css = "";
        foreach ($css_list as $arg) {
            $option = "";
            $separator = "";

            foreach ($arg["option"] as $key => $val) {
                $option .= $key . " = '" . $val . "' ";
            }
            $option .= date("YmdHis");

            if (strpos($arg["name"], "?") == TRUE)
                $separator = "&";
            else
                $separator = "?";

            if($option == "")
                $separator = "";

            $html_css .= "<link href='" . $arg['name'] . $separator . $option . "' rel='stylesheet' >";
        }

        return $html_css;
    }

    protected function render_js($js_list)
    {
        $html_js = "";
        foreach ($js_list as $arg) {
            $option = "";
            $separator = "";

            foreach ($arg["option"] as $key => $val) {
                $option .= $key . " = '" . $val . "' ";
            }
            $option .= date("YmdHis");

            if (strpos($arg["name"], "?") == TRUE)
                $separator = "&";
            else
                $separator = "?";

            if($option == "")
                $separator = "";

            $html_js .= "<script src='" . $arg['name'] . $separator . $option . "' ></script>";
        }

        return $html_js;
    }

//---------------------------------------------------------------
// API
//---------------------------------------------------------------
    public function logout()
    {
        // session_start();
        session_destroy();
        // $this->index();

    }

    public function login()
    {
        // session_start();

        $output[] = null;
        $post = $this->input->post();
        // print_r($post);

        $this->load->model('db/metlife_emp_db', 'emp_db');

        $userid   = $post['userid'];
        $password = $post['password'];

        // $this->load->database();
        if($userid == "admin" || $userid == "metlife"){
          $rslt = $this->emp_db->admin_login_in($userid, $password);
        }else{
          $rslt = $this->emp_db->user_login_in($userid, $password);
        }

        echo json_encode($rslt);

    }

    public function get_booking_list()
    {
        $data['is_logged'] = $this->is_logged;
        $data['user_id'] = $this->user_id;

        if(!$data['user_id'])
        {
            $result["ERR"] = "LOGOUT";
            echo json_encode($result);
            return;
        }

        $post = $this->input->post();
        // print_r($post);
        // return;

        $this->load->model('db/booking_db', 'booking_db');
        $result["booking_list"] = $this->booking_db->select_booking_list($post);

        echo json_encode($result);
    }

    public function get_booking_passport()
    {
        $data['is_logged'] = $this->is_logged;
        $data['user_id'] = $this->user_id;

        if(!$data['user_id'])
        {
            $result["ERR"] = "LOGOUT";
            echo json_encode($result);
            return;
        }

		$get = $this->input->get();

        $this->load->model('db/booking_db', 'booking_db');
        $result = $this->booking_db->select_booking_passport($get);
		$src = 'data:'. str_replace(".", "image/", $result['image_extension']) .';base64,'. $result['image_data'];

        echo $src;
    }
}