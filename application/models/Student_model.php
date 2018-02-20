<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student_model extends CI_Model {
    function __construct(){
        parent::__construct();
            $this->load->database();
    }

    function save_student($data){
        return $this->db->insert('students', $data);
    }

    function fetch_students(){
        $this->db->select('*');
        $this->db->from('students');
        
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        }

        return [];
    }

    function studno_check(){
        $kw =  $this->input->post('keyword');

        $qry = $this->db->query("select * from students where studno=$kw");
        return $qry->result();
    }

    function fetch_student($id){
        $this->db->select('*');
        $this->db->from('students');
        $this->db->where('studno', $id);

        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->row();
        }

        return [];
    }

     function update_student($data){
        $this->db->where('id', $this->input->post('id'));
        return $this->db->update('students', $data);
    }
}