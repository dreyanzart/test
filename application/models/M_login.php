<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

	public function Proseslogin($user,$pass){
		$this->db->where('username',$user);
		$this->db->where('password',$pass);
		return $this->db->get('user')->row();
	}
	
}
?>