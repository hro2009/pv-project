<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_model extends CI_Model {

    private $table;

    public function __construct(){
        parent::__construct();

        $this->load->database();
    }

    public function set_table($name){
        $this->table=$name;
    }

}
