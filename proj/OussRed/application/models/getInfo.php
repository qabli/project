<?php

class GetInfo extends CI_model {

	public function index($request){
		if($request=="")
			$request="cars";
		else
			$request="cars/".$request;
		$data_from_api = file_get_contents('http://localhost:4040/slimapi/public/api/'.$request);
		$dat = json_decode($data_from_api,true);
		return $dat;
	}
}
?>