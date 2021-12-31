<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$this->load->helper('api_dashboard_helper');
		$obj = new DashboardApi();
		$dashboard = $obj->get_dashboard('STEER','MAN');

		$data = [
			    "application_list" => $dashboard['application_list']
			];

		$this->load->view('dashboard/index',$data);
	}
}
