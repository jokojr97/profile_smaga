<?php
class M_prestasi extends CI_Model
{
    function get_prestasi()
    {
        $hsl = $this->db->get('smaga_prestasi');
        return $hsl;
    }
    function get_ekstra()
    {
        $hsl = $this->db->get('smaga_ekstra');
        return $hsl;
    }
    function get_fasilitas()
    {
        $hsl = $this->db->get('smaga_facilities');
        return $hsl;
    }
}
