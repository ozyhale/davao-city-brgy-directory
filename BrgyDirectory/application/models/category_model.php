<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of category_model
 *
 * @author Ozy Admin
 */
class Category_model extends CI_Model {

    //put your code here

    public function __construct() {
        parent::__construct();
    }

    public function get_all_data() {
        $query = $this->db->get('category');

        return $query;
    }
    
    public function add(){
        $this->name = $this->input->post('category');
        $this->directory = strtolower(url_title($this->input->post('category'), '_'));
        $this->db->insert('category', $this);
    }
    
    public function delete($id) {
        $this->db->delete('category', array('id' => $id));
    }

    public function get_data_by_id($id){
        return $this->db->get_where('category', array('id' => $id));
    }
    
    public function get_directory_by_id($id){
        
        $query = $this->db->get_where('category', array('id' => $id));
        
        $row = $query->row();
        
        return $row->directory;

    }
}

?>
