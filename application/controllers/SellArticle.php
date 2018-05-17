<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	require_once(APPPATH . 'libraries/paypal-php-sdk/paypal/rest-api-sdk-php/sample/bootstrap.php'); // require paypal files
	use PayPal\Api\ItemList;
	use PayPal\Api\Payment;
	use PayPal\Api\RedirectUrls;
	use PayPal\Api\PaymentExecution;

class SellArticle extends CI_Controller {

	public $_api_context;

    function  __construct()
    {
        parent::__construct();
        $this->load->model('paypal_model', 'paypal');
        // paypal credentials
        $this->config->load('paypal');

        $this->_api_context = new \PayPal\Rest\ApiContext(
            new \PayPal\Auth\OAuthTokenCredential(
                $this->config->item('client_id'), $this->config->item('secret')
            )
        );
    }

	
	public function index()
	{		
		if($this->session->userdata('email')==''){
			header('Location:'.base_url().'Home');
		}

		$user=$this->session->userdata('email');
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
		'sell_by'=>$user,
		'title' => $_POST['title'] ,
		/*'product' => $_POST['product'] ,*/
		'price' => $_POST['price'] ,
		'placedOn' => $now );
		
		$iid=$this->db->insert("product",$data);

		$proID=$this->db->insert_id();

		if($proID>0){
			$this->session->set_userdata('tempdata_id',$proID);
		}
		//Define the file names with blog id with same extension which has been uploaded
		$product_image = $proID."_product.".pathinfo($_FILES['product']['name'], PATHINFO_EXTENSION);		
		$updateData = array(
			"product" => $product_image			
		);

		// update the name of the images in the database
		$this->db->where('id',$proID);
		$this->db->update('product',$updateData);

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








 /*Store Form Listen data into Session*/

    public function formListenData()
    {
        $email=$this->session->userdata('email');
        $data = array(
                'user_email'=>$email,
                'item_name' => $_POST['item_name'],
                'audio_id'=>$_POST['audio_id']
            );
        var_dump($data);
        $ap=$this->db->insert("audio_player",$data);
        if($ap>0){
            $id=$data['audio_id'];
            $this->session->set_userdata('id',$id);
        }
    }


    


	/*Payment integration*/

	
    function create_payment_with_paypal()
    {

        // setup PayPal api context
        $this->_api_context->setConfig($this->config->item('settings'));


// ### Payer
// A resource representing a Payer that funds a payment
// For direct credit card payments, set payment method
// to 'credit_card' and add an array of funding instruments.

        $payer['payment_method'] = 'paypal';

// ### Itemized information
// (Optional) Lets you specify item wise
// information
        $item1["name"] = $this->input->post('item_name');
        $item1["sku"] = $this->input->post('item_number');  // Similar to `item_number` in Classic API
        $item1["description"] = $this->input->post('item_description');
        $item1["currency"] ="USD";
        $item1["quantity"] =1;
        $item1["price"] = $this->input->post('item_price');

        $itemList = new ItemList();
        $itemList->setItems(array($item1));

// ### Additional payment details
// Use this optional field to set additional
// payment information such as tax, shipping
// charges etc.
        $details['tax'] = $this->input->post('details_tax');
        $details['subtotal'] = $this->input->post('details_subtotal');
// ### Amount
// Lets you specify a payment amount.
// You can also specify additional details
// such as shipping, tax.
        $amount['currency'] = "USD";
        $amount['total'] = $details['tax'] + $details['subtotal'];
        $amount['details'] = $details;
// ### Transaction
// A transaction defines the contract of a
// payment - what is the payment for and who
// is fulfilling it.
        $transaction['description'] ='Payment description';
        $transaction['amount'] = $amount;
        $transaction['invoice_number'] = uniqid();
        $transaction['item_list'] = $itemList;

        // ### Redirect urls
// Set the urls that the buyer must be redirected to after
// payment approval/ cancellation.
        $baseUrl = base_url();
        $redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl($baseUrl."SellArticle/getPaymentStatus")
            ->setCancelUrl($baseUrl."SellArticle/getPaymentStatus");

// ### Payment
// A Payment Resource; create one using
// the above types and intent set to sale 'sale'
        $payment = new Payment();
        $payment->setIntent("sale")
            ->setPayer($payer)
            ->setRedirectUrls($redirectUrls)
            ->setTransactions(array($transaction));

        try {
            $payment->create($this->_api_context);
        } catch (Exception $ex) {
            // NOTE: PLEASE DO NOT USE RESULTPRINTER CLASS IN YOUR ORIGINAL CODE. FOR SAMPLE ONLY
            ResultPrinter::printError("Created Payment Using PayPal. Please visit the URL to Approve.", "Payment", null, $ex);
            exit(1);
        }
        foreach($payment->getLinks() as $link) {
            if($link->getRel() == 'approval_url') {
                $redirect_url = $link->getHref();
                break;
            }
        }

        if(isset($redirect_url)) {
            /** redirect to paypal **/
            redirect($redirect_url);
        }

        $this->session->set_flashdata('success_msg','Unknown error occurred');
        redirect('paypal/index');

    }


    public function getPaymentStatus()
    {

        // paypal credentials

        /** Get the payment ID before session clear **/
        $payment_id = $this->input->get("paymentId") ;
        $PayerID = $this->input->get("PayerID") ;
        $token = $this->input->get("token") ;
        /** clear the session payment ID **/

        if (empty($PayerID) || empty($token)) {
            $this->session->set_flashdata('success_msg','Payment failed');
            redirect('paypal/index');
        }

        $payment = Payment::get($payment_id,$this->_api_context);


        /** PaymentExecution object includes information necessary **/
        /** to execute a PayPal account payment. **/
        /** The payer_id is added to the request query parameters **/
        /** when the user is redirected from paypal back to your site **/
        $execution = new PaymentExecution();
        $execution->setPayerId($this->input->get('PayerID'));

        /**Execute the payment **/
        $result = $payment->execute($execution,$this->_api_context);



        //  DEBUG RESULT, remove it later **/
        if ($result->getState() == 'approved') {
            $trans = $result->getTransactions();


            // item info
            $Subtotal = $trans[0]->getAmount()->getDetails()->getSubtotal();
            $Tax = $trans[0]->getAmount()->getDetails()->getTax();

            $payer = $result->getPayer();
            // payer info //
            $PaymentMethod =$payer->getPaymentMethod();
            $PayerStatus =$payer->getStatus();
            $PayerMail =$payer->getPayerInfo()->getEmail();

            $relatedResources = $trans[0]->getRelatedResources();
            $sale = $relatedResources[0]->getSale();
            // sale info //
            $saleId = $sale->getId();
            $CreateTime = $sale->getCreateTime();
            $UpdateTime = $sale->getUpdateTime();
            $State = $sale->getState();
            $Total = $sale->getAmount()->getTotal();
            $user=$this->session->userdata('email');
            /** it's all right **/
            /** Here Write your database logic like that insert record or value in database if you want **/
            $dt=$this->paypal->create($Total,$Subtotal,$Tax,$PaymentMethod,$PayerStatus,$PayerMail,$saleId,$CreateTime,$UpdateTime,$State);
 
            /*$TransData=array('')*/
            $this->session->set_flashdata('success_msg','Payment success');
            redirect('SellArticle/success');
        }
        $this->session->set_flashdata('success_msg','Payment failed');
        redirect('SellArticle/cancel');
    }

    function success(){
        $iid=$this->session->userdata('email');
        if($iid==''){
            header('Location:'.base_url().'Home');
        }
        /*$this->load->view("content/success");*/
        $this->load->view("content/playAudio");
    }

    function cancel(){
        $this->paypal->create_payment();
        $this->load->view("content/cancel");
    }

    public function destroyId()
    {
        $this->session->unset_userdata('id');
        header("Location:".base_url()."Home");
    }
}
