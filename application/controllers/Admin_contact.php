<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_contact extends CI_Controller {

	
	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Admin_contact",
			"stylesheet" => array("admin_contact.css")
		);
		$footerData = array(
			"jsFiles" => array("admin_contact.js")
		);
		$viewData = array(
			"viewName" => "admin_contact",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admintemplate',$viewData);
	}
}
