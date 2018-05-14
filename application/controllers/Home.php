<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Home",
			"stylesheet" => array("dashboard.css")
		);
		$footerData = array(
			"jsFiles" => array("dashboard.js")
		);
		$viewData = array(
			"viewName" => "home",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}

	public function adduserregdata()
	{
		$data = array('name' => $_POST['name'] ,
		'mobile' => $_POST['mobile'] ,
		'email' => $_POST['email'] ,
		'password' => $_POST['password']  );

		$this->db->insert("user_register",$data);
	}

	public function userloggdata()
	{
		$this->load->model("user_model");
		$data = $_POST['data'];
		$ress = $this->user_model->userlog($data);
		echo json_encode($ress);
	}
}
