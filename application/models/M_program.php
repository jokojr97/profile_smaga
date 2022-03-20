<?php
class M_program extends CI_Model{
	function get_all(){
		$this->db->order_by('id_program', 'DESC');
		$hsl = $this->db->get('smaga_programs');
		$no = 0;
		foreach ($hsl->result() as $row){
			$jml_post = 0;
			$hasils[$no]['id_program'] = $row->id_keyword;
			$hasils[$no]['name'] = $row->name;
			$hasils[$no]['slug'] = $row->slug;
			$hasils[$no]['created_at'] = $row->date_created;
			$hasil = $this->get_post_from_name($row->name);
			foreach($hasil->result() as $rw){
				$hasils[$no]['post'][$jml_post]['id'] = $rw->id_post;
				$hasils[$no]['post'][$jml_post]['judul'] = $rw->judul;
				$hasils[$no]['post'][$jml_post]['slug'] = $rw->slug;
				$hasils[$no]['post'][$jml_post]['keywords'] = $rw->keywords;
				$hasils[$no]['post'][$jml_post]['kategori'] = $rw->kategori;
				$hasils[$no]['post'][$jml_post]['date_created'] = $rw->date_created;
				// $hasils[$no]['post']['deskripsi'] = $rw->deskripsi;
				$jml_post++;
			}
			$hasils[$no]['jml_post'] = $jml_post;
			$no++;
		}
		return $hasils;
	}
	
    function get_programs() {
		$hsl = $this->db->get('smaga_programs');
		return $hsl;
    }

    function get_program_by_slug($id) {
		$hsl = $this->db->get_where('smaga_programs', ['slug' => $id])->row_array();
		return $hsl;
    }
	function get_post_from_id($id){
		// $hsl = $this->db->get_where('smaga_keywords', ['id_keyword' => $id]);
		$hsl = $this->db->query("SELECT * FROM `smaga_post` WHERE `programs` LIKE '%".$id."%'");
		return $hsl;
	}
	function get_post_from_name($id){
		// $hsl = $this->db->get_where('smaga_keywords', ['id_keyword' => $id]);
		$hsl = $this->db->query("SELECT * FROM `smaga_post` WHERE `programs` LIKE '%".$id."%'");
		return $hsl;
	}
	
	function get_program_list($name, $limit, $start){
		$query = "SELECT * FROM `smaga_post` WHERE `programs` LIKE '%".$name."%' LIMIT ".$start.", ".$limit."";
		$hsl = $this->db->query($query);
		return $hsl;
    }

	function get_program_by_id($id){
		$hsl = $this->db->get_where('smaga_programs', ['id_programs' => $id])->row_array();
		return $hsl;
	}
	
    function insert_program($name,$slug) {
		$data = [
			"name" => $name,			
			"slug" => $slug,	
			"date_created" => date("Y-m-d h:i:s"),
			"updated_at" => date("Y-m-d h:i:s"),
		];
		$this->db->insert('smaga_programs', $data);
    }

	function hapus($id) {
		$hsl = $this->db->delete('smaga_programs', array('id_program' => $id));
		return $hsl;
	}

    function update($id,$tagname,$tagslug) { 
		$data = [
			"name" => $tagname,
			"slug" => $tagslug,
			"updated_at" => date("Y-m-d h:i:s"),
		];
		$this->db->where('id_program', $id);
		$this->db->update('smaga_programs', $data);
    }	

}