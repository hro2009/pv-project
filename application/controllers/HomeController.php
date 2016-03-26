<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends My_controller
{
    public function __construct()
    {
        parent::__construct();

        $this->set_css(array(
            'style',
            'bootstrap',
            'bootstrap-theme',
            'jquery.bxslider',
            'owl.carousel',
            'owl.theme',
            'modal'
        ));

        $this->set_js(array(
            'jquery.bxslider',
            'owl.carousel',
            'bootstrap',
            'sitejs'

        ));
    }

    public function index(){

        $this->data['page']="HomeView";

        $this->load->view('site-layouts/content',$this->data);
    }

}
