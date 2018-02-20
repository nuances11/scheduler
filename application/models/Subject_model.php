<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subject_model extends CI_Model {
    function __construct(){
        parent::__construct();
            $this->load->database();
    }

    function save_subject($data){
        return $this->db->insert('subjects', $data);
    }

    function fetch_subjects(){
        $this->db->select('*');
        $this->db->from('subjects');
        
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        }

        return [];
    }

    function fetch_subject($id){
        $this->db->select('*');
        $this->db->from('subjects');
        $this->db->where('sub_id', $id);

        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->row();
        }

        return [];
    }

     function update_subject($data){
        $this->db->where('sub_id', $this->input->post('sub_id'));
        return $this->db->update('subjects', $data);
    }
}