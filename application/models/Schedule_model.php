<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schedule_model extends CI_Model {
    function __construct(){
        parent::__construct();
            $this->load->database();
    }

    function schedule_save($data){
        return $this->db->insert('schedule', $data);
    }

    function get_sections(){
        $this->db->select('*');
        $this->db->from('sections');
        
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        }

        return [];
    }

    function get_subjects(){
        $this->db->select('*');
        $this->db->from('subjects');
        
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        }

        return [];
    }

    function get_teachers(){
        $this->db->select('*');
        $this->db->from('teachers');
        
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        }

        return [];
    }
}