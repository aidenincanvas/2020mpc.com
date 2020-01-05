<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
        $data['pathname'] = 'mgmt_list';
        $data['asset_root'] = '/mgmt/';

        $this->load->view('admin/mgmt_list',$data);
    }

    public function mgmt_list()
    {
        $this->index();
    }


    public function booking_list()
    {
        $data['is_logged'] = $this->is_logged;
        $data['user_id'] = $this->user_id;
        $data['pathname'] = 'booking_list';
        $data['asset_root'] = '/mgmt/';

        $this->load->view('admin/booking_list',$data);
    }
}