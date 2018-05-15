<?php 
class Admin_model extends CI_Model
{
	public function adminlog($data)
	{
		$username = $data['username'];
		$password = $data['password'];

		$t = $this->db->query("select * from admin where username = '".$username."' and password='".$password."' ");
		
		if($t->num_rows()==1)
		{
			$t= array('status' => "ok",
			'message' => "login ok" );
			$this->session->set_userdata('username',$username);
		}
		else
		{
			$t= array('status' => "no",
			'message' => "login fail"  );
		}
		return $t;
	}
}

?>