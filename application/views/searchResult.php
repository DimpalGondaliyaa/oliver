<?php $w =  $this->session->userdata('wixicode');

$w1 = $this->db->query("select * from products where wixicode='$w'");
$w2 = $w1->row_array();

var_dump($w2);

?>