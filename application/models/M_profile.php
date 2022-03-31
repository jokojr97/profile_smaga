<?php
class M_profile extends CI_Model
{

    function get_profile()
    {
        $hsl = $this->db->get('smaga_site')->row_array();
        return $hsl;
    }
}
