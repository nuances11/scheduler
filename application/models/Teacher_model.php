<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teacher_model extends CI_Model {
    function __construct(){
        parent::__construct();
            $this->load->database();
    }

    function save_teacher($data){
        return $this->db->insert('teachers', $data);
    }

    function fetch_teachers(){
        $this->db->select('*');
        $this->db->from('teachers');
        
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        }

        return [];
    }

    function fetch_teacher($id){
        $this->db->select('*');
        $this->db->from('teachers');
        $this->db->where('teacher_id', $id);

        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->row();
        }

        return [];
    }

     function update_teacher($data){
        $this->db->where('teacher_id', $this->input->post('teacher_id'));
        return $this->db->update('teachers', $data);
    }
}