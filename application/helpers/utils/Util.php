<?php

class Util{

	public static function pretty_dump($input, $export = false){

		if ($export === true) {
			echo "<pre>", var_export($input) , "</pre>";
		} else {
			echo "<pre>", var_dump($input) , "</pre>";
		}
	}

	public static function data_list($data,$id,$val,$label="")
	{
		if(!empty($label))  $output = array('' => $label) ;
		
		foreach ($data as $record) {
			$output[$record[$id]]=$record[$val];
		}
		return $output;    
	}
	public static function json_output($response)
	{
		$ci =& get_instance();
		$ci->output->set_content_type('application/json');
		$ci->output->set_status_header(200);
		$ci->output->set_output(json_encode($response));
	}
	
}
