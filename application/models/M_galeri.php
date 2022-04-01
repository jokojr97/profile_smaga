<?php
class M_galeri extends CI_Model
{
    function get_foto()
    {
        $hsl = $this->db->get('smaga_foto');
        return $hsl;
    }
}
