<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of users
 *
 * @author Ozy Admin
 */
class Categories extends CI_Controller {

    public function __construct() {
        parent::__construct();
        
        show_404();

        $this->load->model('user_model', '', TRUE);
        $this->load->model('category_model', '', TRUE);
        $this->load->library('session');
        $this->load->helper('form');

        if ($this->session->userdata('account_type') != "Super Admin") {
            redirect("administrator");
        }

        if ($this->session->userdata('username') == '') {
            redirect('administrator');
            exit;
        }

        $middle_initial = substr($this->session->userdata('middlename'), 0, 1) . '.';

        $this->template_engine->assign('username', $this->session->userdata('username'));
        $this->template_engine->assign('email', $this->session->userdata('email'));
        $this->template_engine->assign('firstname', $this->session->userdata('firstname'));
        $this->template_engine->assign('middlename', $this->session->userdata('middlename'));
        $this->template_engine->assign('middle_initial', $middle_initial);
        $this->template_engine->assign('lastname', $this->session->userdata('lastname'));
        $this->template_engine->assign('account_type', $this->session->userdata('account_type'));
        $this->template_engine->assign('footer', 'footer.tpl');
        $this->template_engine->assign('active_menu_item', 'Categories');

        $this->template_engine->assign('title', get_class($this) . ' - ' . $this->config->item('site_name'));
    }

    public function index() {
        $this->template_engine->assign('content', 'back_categories.tpl');
    }

    public function add() {

        $this->load->library('form_validation');
        $this->load->helper('form');

        $this->form_validation->set_rules('category', 'Category', 'required|xss_clean|is_unique[category.name]');

        if (!$this->form_validation->run()) {

            if (validation_errors() != "") {
                $this->template_engine->set_add_category_alert(validation_errors(), 'Error');
            }

            $this->index();

            return;
        }

        $folders = scandir("./");

        $exist = false;

        foreach ($folders as $folder) {
            if ($folder == strtolower(url_title($this->input->post('category'), '_'))) {
                $exist = true;
                break;
            }
        }

        if ($exist) {
            $this->template_engine->set_add_category_alert("Category Exists!", 'Error');
            $this->index();
            return;
        }

        mkdir("./" . strtolower(url_title($this->input->post('category'), '_')));

        $this->category_model->add();
        redirect('categories/added_successfully');
    }

    public function added_successfully() {
        $this->template_engine->set_add_category_alert("Added Successfully!", 'Success');
        $this->index();
    }

    public function delete($id = '') {

        if ($id != '') {

            if ($this->_delete_category($id)) {
                $this->template_engine->set_alert("Deleted Successfully!", 'Success');
                $this->index();
            } else {
                $this->template_engine->set_alert("Category must be empty and not assigned by 1 of the users", "Error");
                $this->index();
            }
        }

        if (isset($_GET['selected'])) {

            $selected = rtrim($_GET['selected'], "_");

            $selected_arr = explode("_", $selected);

            $deleted = 0;

            foreach ($selected_arr as $id) {
                if ($this->_delete_category($id)) {
                    $deleted++;
                }
            }

            if ($deleted == count($selected_arr)) {
                $this->template_engine->set_alert("Deleted Successfully!", 'Success');
                $this->index();
            } else {
                $this->template_engine->set_alert("Category/categories must be empty and not assigned by 1 of the users.", 'Info');
                $this->index();
            }
        }
    }

    private function _delete_category($id) {

        $query2 = $this->user_model->get_data_by_assigned_to($id);
        
        if($query2->num_rows() != 0){
            $this->index();
            return false;
        }
        
        $query = $this->category_model->get_data_by_id($id);

        if ($query->num_rows() == 0) {
            $this->index();
            return false;
        }

        $row = $query->row();

        //check if folder exists
        $folders = scandir("./");

        $exists = false;

        foreach ($folders as $folder) {
            if ($folder == $row->directory) {
                $exists = true;
            }
        }

        //check if folder has files/folders inside
        if ($exists) {

            $folders2 = scandir("./" . $row->directory);

            $protect = array('.', '..');

            $folders3 = array_diff($folders2, $protect);

            if (empty($folders3)) {
                $this->category_model->delete($id);
                rmdir("./" . $row->directory);
                return TRUE;
            } else {
                return FALSE;
            }
        }
    }

    public function edit($id) {

        if ($id == '') {
            $this->index();
            return;
        }

        $query = $this->category_model->get_data_by_id($id);

        if (!$query->num_rows() == 0) {
            $this->index();
            return;
        }
    }

    public function _output() {

        $categories = $this->category_model->get_all_data();

        $this->template_engine->assign('categories', $categories->result_array());
        $this->template_engine->display('back.tpl');
    }

}

?>
