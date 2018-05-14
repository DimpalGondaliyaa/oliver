<?php 
class user_model extends CI_Model
{
	public function userlog($data)
	{
		$email = $data['email'];
		$password = $data['password'];

		$t = $this->db->query("select * from user_register where email = '".$email."' and password='".$password."' ");
		
		if($t->num_rows()==1)
		{
			$t= array('status' => "ok",
			'message' => "login ok" );
			$this->session->set_userdata('email',$email);
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