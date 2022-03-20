<?php
class M_page extends CI_Model{
	function get_page(){
		$hsl = $this->db->get('smaga_pages');
		return $hsl;
	}
}