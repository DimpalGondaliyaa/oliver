<?php
    $this->load->view("includes/adminheader.php",$headerData);
    
	$this->load->view($viewName.".php",$viewData);
    
    $this->load->view("includes/adminfooter.php",$footerData); 
?>