<?php 
class Login_blog extends CI_Model{

	function auth_login($username,$password){
		$query=$this->db->query("SELECT * FROM user WHERE nama_pengguna ='$username' AND pass='$password'");
		return $query;

	}

	function auth_akses($akses,$data){
		$query=$this->db->query("SELECT * FROM user WHERE akses = '$akses'");
		return $query;
	}
}

?>



