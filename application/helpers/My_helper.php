<?php

if(!function_exists('debug_print')){
     function debug_print($data,$exit=false){
        echo "<pre>";
        print_r($data);
        echo "</pre>";
        if($exit){
            exit;
        }
    }
}




class Attach_assets  {

    public static function attach_css($data){
        foreach($data as $item){
            echo "<link href='".base_url('assets/site/css/'.$item.'.css')."' rel='stylesheet' type='text/css'/>";
        }
    }


    public static function attach_js($data){
        foreach($data as $item){
            echo "<script src='".base_url('assets/site/js/'.$item.'.js')."' type='text/javascript'/></script>";
        }
    }
}



