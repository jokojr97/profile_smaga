<?php
class M_galeri extends CI_Model
{
    function get_foto()
    {
        $hsl = $this->db->order_by('id', 'desc')->get('smaga_foto');
        return $hsl;
    }
    function addfoto($title, $description, $image, $upload_date)
    {
        $data = [
            "title" => $title,
            "description" => $description,
            "image" => $image,
            "upload_date" => $upload_date,
        ];
        $this->db->insert('smaga_foto', $data);
    }

    function updatefoto($title, $description, $image, $upload_date, $id)
    {
        $data = [
            "title" => $title,
            "description" => $description,
            "image" => $image,
            "upload_date" => $upload_date,
        ];
        $this->db->where('id', $id);
        $this->db->update('smaga_foto', $data);
    }

    function updatefototext($title, $description, $upload_date, $id)
    {
        $data = [
            "title" => $title,
            "description" => $description,
            "upload_date" => $upload_date,
        ];
        $this->db->where('id', $id);
        $this->db->update('smaga_foto', $data);
    }

    function hapusfoto($id)
    {
        $hsl = $this->db->delete('smaga_foto', array('id' => $id));
        return $hsl;
    }
}
