<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SearchResult extends CI_Controller {

	
	public function index()
	{		
		$headerData = array(
			"pageTitle" => "SearchResult",
			"stylesheet" => array("searchResult.css")
		);
		$footerData = array(
			"jsFiles" => array("searchResult.js")
		);
		$viewData = array(
			"viewName" => "searchResult",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}
}
