<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal_model extends CI_Model {
    function __construct(){
        parent::__construct();
            $this->load->database();
    }

    function save_principal($data){
        return $this->db->insert('users', $data);
    }

    function fetch_principals(){
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('user_type', '2');

        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        }

        return [];
    }

    function fetch_principal($id){
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('user_id', $id);
        $this->db->where('user_type', '2');

        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->row();
        }

        return [];
    }

     function update_principal($data){
        $this->db->where('user_id', $this->input->post('user_id'));
        return $this->db->update('users', $data);
    }

    function activate_principal($id)
    {
        $data = array (
            'status' => 1
        );
        $this->db->where('user_id', $id);
        return $this->db->update('users', $data);
    }

    function deactivate_principal($id){
        $data = array (
            'status' => 0
        );
        $this->db->where('user_id', $id);
        return $this->db->update('users', $data);
    }

}
