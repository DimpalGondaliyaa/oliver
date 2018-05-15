<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Operation extends CI_Controller {

	
	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Operation",
			"stylesheet" => array("operation.css")
		);
		$footerData = array(
			"jsFiles" => array("operation.js")
		);
		$viewData = array(
			"viewName" => "operation",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}
}
?>