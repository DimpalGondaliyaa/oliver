<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	
	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Contact",
			"stylesheet" => array("contact.css")
		);
		$footerData = array(
			"jsFiles" => array("contact.js")
		);
		$viewData = array(
			"viewName" => "contact",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}

	public function addcondata()
	{
		$data = array('first_name' => $_POST['first_name'] ,
		'last_name' => $_POST['last_name'] ,
		'email' => $_POST['email'] ,
		'mobile' => $_POST['mobile'] ,
		'address' => $_POST['address'] );

		$this->db->insert("contact",$data);
	}
}
