<?php
class Auth_model extends CI_Model{
	public function create($formArray){
		$this->db->insert('users',$formArray);
	}
	public function checkUser($email){
		$this->db->where('email',$email);
		return $row = $this->db->get('users')->row_array();

	}
	function authorized()
	{
		$user = $this->session->userdata('user');
		if(!empty($user)){
			return true;
		}
		else {
			return false;
		}
	}
	function validateEmail($email){
		$query = $this->db->query("SELECT * FROM users WHERE email='$email'");
		if($query->num_rows() == 1)
		{
			return $query->row();
		}
		else {
			return false;
		}
	}
	function updatePasswordhash($data,$email)
	{
		$this->db->where('email',$email);
		$this->db->update('users',$data);
	}
	function getHashDetails($hash)
	{
		$query = $this->db->query("select * from users where hash_key = '$hash'");
		if($query->num_rows() == 1)
		{
			return $query->row();
		}
		else {
			return false;
		}
	}
	function validateCurrentPassword($current_password,$hash)
	{
		$query = $this->db->query("SELECT * FROM users WHERE password='$current_password' AND hash='$hash'");
		if($query->num_rows() ==1)
		{
			return true;
		}
		else{
			return false;
		}
	}
	function updateNewPassword($data,$hash)
	{
		$this->db->where('hash',$hash);
		$this->db->update('users',$data);
	}

}
?>
