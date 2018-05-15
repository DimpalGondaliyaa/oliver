<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	
	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Admin",
			"stylesheet" => array("admin.css")
		);
		$footerData = array(
			"jsFiles" => array("admin.js")
		);
		$viewData = array(
			"viewName" => "admin",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}

	public function adminloggdata()
	{
		$this->load->model("admin_model");
		$data = $_POST['data'];
		$ress = $this->admin_model->adminlog($data);
		echo json_encode($ress);
	}

	
}
