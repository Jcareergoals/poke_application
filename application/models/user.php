<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user extends CI_Model {
	public function create_user($user)
	{
		$query = "INSERT INTO users (name, alias, dob, email, password, created_at, updated_at)
		          VALUES (?,?,?,?,?,NOW(), NOW())";
		$password = array($user['name'], $user['alias'], $user['dob'], $user['email'], $user['password']);
		return $this->db->query($query, $password);
	}
	public function get_user_by_email($user)
	{
		$query = "SELECT * FROM users WHERE email = ?";
		if($user['email'])
		{
			// email entered at registration
			$email = $user['email'];
		}
		else 
		{
			// email entered at login
			$email = $user['email2'];
		}
		$values = array($email);
		return $this->db->query($query, $values)->row_array();
	}
}