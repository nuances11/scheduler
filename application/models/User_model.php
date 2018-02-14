<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
    function __construct(){
        parent::__construct();
            $this->load->database();
    }

    function save_user($data){
        return $this->db->insert('users', $data);
    }

    function fetch_users(){
        $this->db->select('*');
        $this->db->from('users');
        
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        }

        return [];
    }

    function fetch_user($id){
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('user_id', $id);

        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->row();
        }

        return [];
    }

     function update_user($data){
        $this->db->where('user_id', $this->input->post('user_id'));
        return $this->db->update('users', $data);
    }

    function activate_user($id)
    {
        $data = array (
            'status' => 1
        );
        $this->db->where('user_id', $id);
        return $this->db->update('users', $data);
    }

    function deactivate_user($id){
        $data = array (
            'status' => 0
        );
        $this->db->where('user_id', $id);
        return $this->db->update('users', $data);
    }
}