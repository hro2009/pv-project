<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_controller extends CI_Controller {


    public function __construct()
    {
        parent::__construct();
    }

    /**
    *
    */
    protected $data;

    /**
     *
     */
    protected $add_css;


    /**
     *
     */
    protected $add_js;


    /**
     * method set_css
     * @param $data;
     * @return array();
     * @functionality Setting Css in Header Part, By Array;
     */
    public function set_css($data){
        $this->data['css']=$data;
    }


    /**
     * method set_js
     * @param $data;
     * @return array();
     * @functionality Setting js in Header Part, By Array;
     */
    public function set_js($data){
        $this->data['js']=$data;
    }


    public function validate($data){
        $this->load->library('form_validation');
        $count=sizeof($data);

        for($i=0;$i<$count;$i++){
            $this->form_validation->set_rules($data[$i][0],$data[$i][1],$data[$i][2]);
        }

        return $this->form_validation->run();

    }

    /**
     * method image_resizing
     * @param $file_name;
     * @return boolean;
     * @functionality Getting Images and resizing uploading and resizing
     */


    public function image_resizing($file_name){

        $config['upload_path']          = './assets/site/siteimages/bigimage';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100;
        $config['max_width']            = 1200;
        $config['max_height']           = 1100;
        $config['encrypt_name']         = true;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload($file_name))
        {

            $image_data=$this->upload->data();
            $config = array(

                array(
                    'image_library'=>'gd2',
                    'source_image'=>$image_data['full_path'],
                    'new_image'=>APPPATH.'../assets/site/siteimages/mediumimage',
                    'maintain_ratio'=>TRUE,
                    'width'=>500,
                    'height'=>300,
                ),


                array(
                    'image_library'=>'gd2',
                    'source_image'=>$image_data['full_path'],
                    'new_image'=>APPPATH.'../assets/site/siteimages/thumbimage',
                    'maintain_ratio'=>TRUE,
                    'width'=>300,
                    'height'=>150,
                ),

            );

            $count=sizeof($config);
            $this->load->library('image_lib', $config);

            for($i = 0; $i < $count; $i++){
                $this->image_lib->initialize($config[$i]);
                $this->image_lib->resize();
            }

        }else{
            return FALSE;
        }
        return TRUE;
    }
}