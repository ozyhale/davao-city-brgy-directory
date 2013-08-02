<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of website_model
 *
 * @author Ozy Admin
 */
class Website_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function add_website($data) {
        $this->db->insert('websites', $data);
    }

    public function is_name_exists($name) {

        $query = $this->db->get_where('websites', array('name' => $name));

        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function get_website_by_id_and_owner($id, $uploaded_by) {
        return $this->db->get_where('websites', array('id' => $id, 'uploaded_by' => $uploaded_by));
    }

    public function get_names() {

        $query = $this->db->query("SELECT name FROM websites");

        $names = array();

        foreach ($query->result_array() as $row) {
            array_push($names, $row['name']);
        }

        return $names;
    }

    public function get_URLs() {

        $query = $this->db->query("SELECT url FROM websites");

        $names = array();

        foreach ($query->result_array() as $row) {
            array_push($names, $row['url']);
        }

        return $names;
    }

    public function add_discovered($data) {
        $this->db->insert('websites', $data);
    }

    public function get_all_data($fields = '') {

        if ($fields != '') {
            $this->db->select($fields);
        }

        $this->db->join('users', 'websites.uploaded_by = users.id');

        $query = $this->db->get('websites');

        return $query;
    }

    public function get_mysites($fields = '', $where = '') {
        if ($fields != '') {
            $this->db->select($fields);
        }

        $this->db->join('users', 'websites.uploaded_by = users.id');

        if ($where != '') {
            $query = $this->db->get_where('websites', $where);
        } else {
            $query = $this->db->get('websites');
        }

        return $query;
    }

    public function get_actives($fields = '') {

        if ($fields != '') {
            $this->db->select($fields);
        }

        $query = $this->db->get_where('websites', array('status' => 'active'));

        return $query;
    }

    public function get_actives_by_district($district) {

        $where['status'] = 'active';
        $where['district'] = $district;

        $query = $this->db->get_where('websites', $where);

        return $query;
    }

    public function get_data($id = '') {

        $query = $this->db->get_where('websites', array('id' => $id));

        if ($query->num_rows() > 0) {
            return $query->row_array();
        } else {
            return false;
        }
    }

    public function delete($id) {
        $this->db->delete('websites', array('id' => $id));
    }

    public function activate($id) {

        $query = $this->db->get_where('websites', array('id' => $id));

        $err = false;

        $value = $query->row_array();

        if ($value['district'] == NULL) {
            $err = true;
        }

        if ($value['description'] == NULL) {
            $err = true;
        }

        if ($value['logo'] == NULL) {
            $err = true;
        }

        if ($err != true) {

            $this->load->helper('date');

            $data['status'] = 'active';
            $data['date_registered'] = mdate('%Y-%m-%d', time());
            ;

            $this->db->where('id', $id);
            $this->db->update('websites', $data);

            return true;
        } else {
            return false;
        }
    }

    public function deactivate($id) {
        $data['status'] = 'inactive';

        $this->db->where('id', $id);
        $this->db->update('websites', $data);
    }

    public function update_website($id, $data) {

//        $this->load->helper('inflector');
//
//        $this->name = $this->input->post('name');
//        $this->logo = 'application/views/logos/' . $this->name . ".png";
//        $this->district = $this->input->post('district');
//        $this->description = $this->input->post('description');
//        $this->url = $this->name;
//        if ($this->session->userdata('account_type') == 'Super Admin') {
//            
//            $id2 = $this->input->post('category');
//
//            $query = $this->db->get_where('category', array('id' => $id2));
//
//            $row = $query->row();
//
//            $this->url = $row->directory . "/" . $this->name;
//        } else {
//            $this->url = $this->session->userdata('category_dir') . "/" . $this->name;
//        }
//        if($this->session->userdata('account_type') == "Super Admin"){
//            $this->category = $this->input->post('category');
//        }

        $this->db->where('id', $id);
        $this->db->update('websites', $data);
    }

    public function search_by_name($name) {

        $this->db->where('status', 'active');
        $this->db->like('name', $name);
//        $this->db->or_like('description', $name);
//        $this->db->or_like('district', $name); 
        $query = $this->db->get('websites');

        return $query;
    }

}

?>
