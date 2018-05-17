<?php 
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Paypal_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	/* This function create new Service. */

	function create($Total,$SubTotal,$Tax,$PaymentMethod,$PayerStatus,$PayerMail,$saleId,$CreateTime,$UpdateTime,$State) {
        
		$email=$this->session->userdata('email');
        $this->db->set('sell_by',$email);
        $this->db->set('txn_id',$saleId);
        $this->db->set('PaymentMethod',$PaymentMethod);
        $this->db->set('PayerStatus',$PayerStatus);
        $this->db->set('PayerMail',$PayerMail);
        $this->db->set('Total',$Total);
        $this->db->set('SubTotal',$SubTotal);
        $this->db->set('Tax',$Tax);
        $this->db->set('Payment_state',$State);
		$this->db->set('CreateTime',$CreateTime);
		$this->db->set('UpdateTime',$UpdateTime);
		$this->db->insert('products');
		$id = $this->db->insert_id();
		

		if($id>0){
			$this->session->set_userdata('payment_id',$id);
			$tempdata_id=$this->session->userdata('tempdata_id');

			$gettemp=$this->db->query("SELECT * FROM product WHERE id='".$tempdata_id."'");
			
			$tmpd=$gettemp->row_array();
			if($tmpd>0){
				$updatRow=$this->db->query("UPDATE products SET wixicode='".$tmpd['wixicode']."', title='".$tmpd['title']."', product='".$tmpd['product']."', price='".$tmpd['price']."' WHERE id='".$id."'");
				if($updatRow>0){
					$this->db->where('id',$tempdata_id);
					$this->db->delete('product');
				}
			}
		}
	}

	/*function createPayment($Total,$SubTotal,$Tax,$PaymentMethod,$PayerStatus,$PayerMail,$saleId,$CreateTime,$UpdateTime,$State) {
        
		$this->load->helper('date');
		//date_default_timezone_set('Asia/Kolkata'); # add your city to set local time zone
		$now = date('Y-m-d H:i:s');

		$email=$this->session->userdata('email');
        $this->db->set('user',$email);
        $this->db->set('txn_id',$saleId);
        $this->db->set('PaymentMethod',$PaymentMethod);
        $this->db->set('PayerStatus',$PayerStatus);
        $this->db->set('PayerMail',$PayerMail);
        $this->db->set('Total',$Total);
        $this->db->set('SubTotal',$SubTotal);
        $this->db->set('Tax',$Tax);
        $this->db->set('Payment_state',$State);
        $this->db->set('placedOn',$now);
		$this->db->set('CreateTime',$CreateTime);
		$this->db->set('UpdateTime',$UpdateTime);
		$this->db->insert('products');
		$id = $this->db->insert_id();*/


/*
		if($id>0){

			$this->session->set_userdata('payment_id',$id);
				$email=$this->session->userdata('email');
			$crt=$this->db->query("SELECT * FROM user_cart WHERE user_email='$email' AND status='confirm'");
			$getId=$crt->result_array();

			foreach ($getId as $key => $value) {
				$m[]=$value['cart_id'];
			}
			$data=array('id'=>implode(',',$m));

			foreach ($data as $key => $v) {
				$v;
				$this->db->query("UPDATE payments_paypal SET products='".$v."' WHERE id='".$id."'");	
			}

			foreach ($getId as $key => $up) {
				
				$u=$up['cart_id'];
				$upCart=$this->db->query("UPDATE user_cart SET status='confirmed' WHERE user_email='".$email."' AND cart_id='".$u."'");	
			}
		}*/

	/*	return $id;
	}*/
}
?>