<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
        $data['is_logged'] = $this->is_logged;
        $data['user_id'] = $this->user_id;
        $data['pathname'] = 'main';

        $this->load->view('user/main',$data);
    }

    public function introduce()
    {
        if($this->is_logged == 'NO')
        {
          $this->index();
        }
        else
        {
          $data['is_logged'] = $this->is_logged;
          $data['user_id']  = $this->user_id;
          $data['pathname'] = 'introduce';
          $this->load->view('user/introduce',$data);
        }
    }

    public function top_mpc()
    {
        if($this->is_logged == 'NO')
        {
          $this->index();
        }
        else
        {
          $data['is_logged'] = $this->is_logged;
          $data['user_id']  = $this->user_id;
          $data['pathname'] = 'top_mpc';
          $this->load->view('user/top_mpc',$data);
        }
    }

    public function schedule()
    {
        if($this->is_logged == 'NO')
        {
          $this->index();
        }
        else
        {
          $data['is_logged'] = $this->is_logged;
          $data['user_id']  = $this->user_id;
          $data['pathname'] = 'schedule';
          $this->load->view('user/schedule',$data);
        }
    }

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

}
