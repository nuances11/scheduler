<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Section_model extends CI_Model {
    function __construct(){
        parent::__construct();
            $this->load->database();
    }

    function save_section($data){
        return $this->db->insert('sections', $data);
    }

    function fetch_sections(){
        $this->db->select('*');
        $this->db->from('sections');

        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        }

        return [];
    }

    function fetch_section($id){
        $this->db->select('*');
        $this->db->from('sections');
        $this->db->where('sec_id', $id);

        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->row();
        }

        return [];
    }

    function get_sections($grade){
        $this->db->select('*');
        $this->db->from('sections');
        $this->db->where('grade', $grade);

        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        }

        return [];
    }

    function section_list()
    {
        $this->db->select('*');
        $this->db->from('sections');
        $this->db->order_by('grade', 'asc');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        }

        return [];
    }


     function update_section($data){
        $this->db->where('sec_id', $this->input->post('sec_id'));
        return $this->db->update('sections', $data);
    }
}
