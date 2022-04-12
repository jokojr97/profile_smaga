<?php
class M_facilities extends CI_Model
{
    function get_facilities()
    {
        $hsl = $this->db->order_by('id', 'desc')->get('smaga_facilities');
        return $hsl;
    }
    function add($name, $description, $image, $date_created)
    {
        $data = [
            "name" => $name,
            "description" => $description,
            "image" => $image,
            "date_created" => $date_created,
            "is_active" => 1
        ];
        $this->db->insert('smaga_facilities', $data);
    }

    function update($name, $description, $image, $date_created, $id)
    {
        $data = [
            "name" => $name,
            "description" => $description,
            "image" => $image,
            "is_active" => 1,
            "date_created" => $date_created,
        ];
        $this->db->where('id', $id);
        $this->db->update('smaga_facilities', $data);
    }

    function updatetext($name, $description, $date_created, $id)
    {
        $data = [
            "name" => $name,
            "description" => $description,
            "date_created" => $date_created,
            "is_active" => 1
        ];
        $this->db->where('id', $id);
        $this->db->update('smaga_facilities', $data);
    }

    function delete($id)
    {
        $hsl = $this->db->delete('smaga_facilities', array('id' => $id));
        return $hsl;
    }
}
