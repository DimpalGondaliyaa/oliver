<?php 
$c = $this->db->query("select * from contact");
$cc = $c->result_array();
var_dump($cc);
?>