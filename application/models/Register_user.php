<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register_user extends CI_Model
{
    public function insert_user_into_DB($data_to_insert)
    {

        $this->db->insert('signup', $data_to_insert);
    }

    public function sigin_data($signin_data)
    {

        $this->db->insert('signin', $signin_data);
    }
    public function getdata()
    {

        $query = $this->db->get('signup');
        return $query->result();

    }

    public function get_user_data($user_id)
    {
        $this->db->where('Id', $user_id);
        $query = $this->db->get('signup');
        return $query->result_array();

    }

    public function update($Id, $data_to_update)
    {

        $this->db->where('Id', $Id);
        $this->db->update('signup', $data_to_update);
    }

    public function deleat_data($Id)
    {

        $this->db->where('Id', $Id);
        $query = $this->db->delete('signup');

    }

    public function record_count()
    {
        return $this->db->count_all("signup");
    }

    public function fetch_data($limit, $start)
    {
        $this->db->limit($limit, $start);
        $query = $this->db->get("signup");

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }
}