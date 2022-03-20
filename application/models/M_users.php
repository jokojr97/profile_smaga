<?php
class M_users extends CI_Model{
	function get_users(){
		$hsl = $this->db->get('smaga_user');
		return $hsl;
	}
	function get_users_by_id($id){
		$hsl = $this->db->get_where('smaga_user', ['id' => $id])->row_array();
		return $hsl;
	}
}