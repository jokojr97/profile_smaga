<?php
class M_site extends CI_Model
{
    function get_site()
    {
        $hsl = $this->db->get('smaga_site')->row_array();
        return $hsl;
    }
    function update_site($title, $slogan, $address, $logo, $icon, $description, $email, $phone, $facebook, $twitter, $instagram, $whatsapps, $students, $teachers, $employee, $extra, $youtube)
    {
        $data = [
            "title" => $title,
            "slogan" => $slogan,
            "address" => $address,
            "logo" => $logo,
            "icon" => $icon,
            "description" => $description,
            "email" => $email,
            "phone" => $phone,
            "facebook" => $facebook,
            "twitter" => $twitter,
            "instagram" => $instagram,
            "whatsapps" => $whatsapps,
            "students" => $students,
            "teachers" => $teachers,
            "employee" => $employee,
            "extra" => $extra,
            "youtube" => $youtube,
        ];
        $this->db->where('id', 1);
        $this->db->update('smaga_site', $data);
    }
    function update_sitelogo($title, $slogan, $address, $logo, $description, $email, $phone, $facebook, $twitter, $instagram, $whatsapps, $students, $teachers, $employee, $extra, $youtube)
    {
        $data = [
            "title" => $title,
            "address" => $address,
            "slogan" => $slogan,
            "logo" => $logo,
            "description" => $description,
            "email" => $email,
            "phone" => $phone,
            "facebook" => $facebook,
            "twitter" => $twitter,
            "instagram" => $instagram,
            "whatsapps" => $whatsapps,
            "students" => $students,
            "teachers" => $teachers,
            "employee" => $employee,
            "extra" => $extra,
            "youtube" => $youtube,
        ];
        $this->db->where('id', 1);
        $this->db->update('smaga_site', $data);
    }
    function update_siteicon($title, $slogan, $address, $icon, $description, $email, $phone, $facebook, $twitter, $instagram, $whatsapps, $students, $teachers, $employee, $extra, $youtube)
    {
        $data = [
            "title" => $title,
            "slogan" => $slogan,
            "address" => $address,
            "icon" => $icon,
            "description" => $description,
            "email" => $email,
            "phone" => $phone,
            "facebook" => $facebook,
            "twitter" => $twitter,
            "instagram" => $instagram,
            "whatsapps" => $whatsapps,
            "students" => $students,
            "teachers" => $teachers,
            "employee" => $employee,
            "extra" => $extra,
            "youtube" => $youtube,
        ];
        $this->db->where('id', 1);
        $this->db->update('smaga_site', $data);
    }
    function update_sitekosong($title, $slogan, $address, $description, $email, $phone, $facebook, $twitter, $instagram, $whatsapps, $students, $teachers, $employee, $extra, $youtube)
    {
        $data = [
            "title" => $title,
            "slogan" => $slogan,
            "address" => $address,
            "description" => $description,
            "email" => $email,
            "phone" => $phone,
            "facebook" => $facebook,
            "twitter" => $twitter,
            "instagram" => $instagram,
            "whatsapps" => $whatsapps,
            "students" => $students,
            "teachers" => $teachers,
            "employee" => $employee,
            "extra" => $extra,
            "youtube" => $youtube,
        ];
        $this->db->where('id', 1);
        $this->db->update('smaga_site', $data);
    }
}
