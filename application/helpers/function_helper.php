<?php
use Util as ut;

if (!function_exists('pretty_dump')) {
    
    function pretty_dump($input, $export = false)
    {
        return ut::pretty_dump($input, $export = false);
    }
}

if (!function_exists('data_list')) {
    
    function data_list($data,$id,$val,$label="")
    {
         return ut::data_list($data,$id,$val,$label="");
       
    }
}

if (!function_exists('json_output')) {
     
     function json_output($response)
    {
        return ut::json_output($response);
    }
	
}
