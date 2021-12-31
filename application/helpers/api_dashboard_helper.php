<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardApi {

	function __construct() {
	}

	public function get_dashboard($org_id,$role_code)
	{
		$curl = curl_init();
		$BASE_URL = "http://localhost:8000";
		curl_setopt_array($curl, array(
			CURLOPT_URL => $BASE_URL."/v2-dashbord",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_CUSTOMREQUEST => 'POST',
			CURLOPT_POSTFIELDS => array('org_id' => $org_id,'role_code' => $role_code),
			CURLOPT_HTTPHEADER => array(
			  'version: 1.0.0'
			),
		  ));
		  
		  $response = curl_exec($curl);		  
		  curl_close($curl);
		$response = json_decode($response,true);
		return $response;
	}
}