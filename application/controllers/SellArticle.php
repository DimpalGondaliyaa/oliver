<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SellArticle extends CI_Controller {

	
	public function index()
	{		
		/*$user=$this->session->userdata('email');*/
		$list=$this->db->query("SELECT * FROM products WHERE sell_by='ravi'");
		$article=$list->result_array();
		$headerData = array(
			"pageTitle" => "SellArticle",
			"stylesheet" => array("sellArticle.css")
		);
		$footerData = array(
			"jsFiles" => array("sellArticle.js")
		);
		$viewData = array(
			"viewName" => "sellArticle",
            "viewData" => array('article'=>$article),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}

	public function sellArticleData()
	{
		$this->load->helper('string');
		$this->load->helper('date');
		
		date_default_timezone_set('Asia/kolkata'); # add your city to set local time zone
		$now = date('Y-m-d H:i:s');

		$wixicode = 'Wixi'.random_string('basic', 16);
		$user=$this->session->userdata('email');

		$data = array(
		'wixicode'=>$wixicode,
		'sell_by'=>'ravi',
		'title' => $_POST['title'] ,
		/*'product' => $_POST['product'] ,*/
		'price' => $_POST['price'] ,
		'placedOn' => $now );
		
		$iid=$this->db->insert("products",$data);

		$proID=$this->db->insert_id();

		//Define the file names with blog id with same extension which has been uploaded
		$product_image = $proID."_product.".pathinfo($_FILES['product']['name'], PATHINFO_EXTENSION);		
		$updateData = array(
			"product" => $product_image			
		);

		// update the name of the images in the database
		$this->db->where('id',$proID);
		$this->db->update('products',$updateData);

		//set configuration for the upload library
		$config['upload_path'] = 'html/images/products/';
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|txt';
	    $config['overwrite'] = TRUE;
	    $config['encrypt_name'] = FALSE;
	    $config['remove_spaces'] = TRUE;
	    
	    //set name in the config file for the feature image
	    $config['file_name'] = $proID."_product";
	    $this->load->library('upload', $config);
	    $this->upload->do_upload('product');
	}

	public function userloggdata()
	{
		$this->load->model("user_model");
		$data = $_POST['data'];
		$ress = $this->user_model->userlog($data);
		echo json_encode($ress);
	}

}
