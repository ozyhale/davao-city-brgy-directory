<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User_model
 *
 * @author Ozy Admin
 */
class User_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_user_info($username, $password) {

//        $query = $this->db->get_where('users', array('username' => $username, 'password' => $password));
//
//        $row = $query->row_array();
//        
//        if ($row['account_type'] != "Super Admin") {
//            $this->db->select('users.id, users.username, users.password, users.firstname, users.middlename, users.lastname, users.account_type, users.account_type, users.assigned_to, category.name AS category_name, category.directory AS category_dir');
//            $this->db->join('category', 'users.assigned_to = category.id');
//        }

        $query2 = $this->db->get_where('users', array('username' => $username, 'password' => $password));

        if ($query2->num_rows() == 1) {
            return $query2->row_array();
        } else {
            return null;
        }
    }

    public function get_user_info_by_id($id) {

        $query = $this->db->get_where('users', array('id' => $id));

        if ($query->num_rows() == 1) {
            return $query->row_array();
        } else {
            return null;
        }
    }
    
    public function get_data_by_id($id) {
        return $this->db->get_where('users', array('id' => $id));
    }
    
    public function get_data_by_assigned_to($directory) {
        return $this->db->get_where('users', array('assigned_to' => $directory));
    }

    public function add_user() {

        $this->load->helper('security');

        $this->username = $this->input->post('username');
        $this->password = do_hash($this->input->post('password'));
        $this->firstname = $this->input->post('firstname');
        $this->lastname = $this->input->post('lastname');
        $this->middlename = $this->input->post('middlename');
        $this->email = $this->input->post('email');
//        $this->assigned_to = $this->input->post('assigned_to');

        $this->db->insert('users', $this);
    }

    public function get_all_data($fields = '') {

        if ($fields != '') {
            $this->db->select($fields);
        }

        $query = $this->db->get('users');

        return $query;
    }

    public function get_all_admins($fields = '') {

        if ($fields != '') {
            $this->db->select($fields);
        }

//        $this->db->join('category', 'users.assigned_to = category.id');
        $query = $this->db->get_where('users', array('account_type' => 'Admin'));

        return $query;
    }

    public function delete($id) {
        $this->db->delete('users', array('id' => $id));
    }

    public function update_settings($id) {

        $this->username = $this->input->post('username');
        $this->firstname = $this->input->post('firstname');
        $this->middlename = $this->input->post('middlename');
        $this->lastname = $this->input->post('lastname');

        $this->db->where('id', $id);
        $this->db->update('users', $this);
    }

}

?>
