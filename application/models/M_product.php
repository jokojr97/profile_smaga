<?php
class M_product extends CI_Model{

	function get_product(){
		$hsl = $this->db->get('smaga_product');		
		$this->db->limit(12);
		return $hsl;
	}

	function get_product_all(){
		$hsl = $this->db->get('smaga_product');		
		$this->db->limit(12);
		return $hsl;
	}

	function get_product_byid($id) {
		$hsl = $this->db->get_where('smaga_product', ['id' => $id])->row_array();
		if(!$hsl) {
			$hsl = $this->db->get_where('smaga_product', ['slug' => $id])->row_array();
		}
		return $hsl;
	}

}