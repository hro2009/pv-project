<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends My_controller
{
    public function __construct()
    {
        parent::__construct();



        $this->set_css(array(
            'style',

        ));
    }

    public function index(){
        $this->load->view('admin-views/dashboard');
    }

}
