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
class Users extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->library('session');
        $this->load->model('user_model', '', TRUE);
        $this->load->helper('form');

        $this->template_engine->assign('title', get_class($this) . ' - ' . $this->config->item('site_name'));

        if ($this->session->userdata('account_type') != "Super Admin") {
            redirect("administrator");
        }
    }

    public function index() {
        $this->load->library('table');

        $query = $this->user_model->get_all_admins('users.id, users.username, users.firstname, users.lastname, users.middlename, users.account_type, users.email');

        $this->template_engine->assign('users', $query->result_array());
        $this->template_engine->assign('content', 'back_users.tpl');
    }

    public function delete($id = '') {

        if ($id != '') {
            $this->user_model->delete($id);
        }

        if ($_GET['selected']) {

            $selected = rtrim($_GET['selected'], "_");

            $selected_arr = explode("_", $selected);

            foreach ($selected_arr as $id) {
                $this->user_model->delete($id);
            }
        }

        redirect('users');
    }

    public function add() {

        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username', 'required|alpha_dash|min_length[7]|is_unique[users.username]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[7]');
        $this->form_validation->set_rules('confpass', 'Confirm Password', 'required|min_length[7]|matches[password]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
//        $this->form_validation->set_rules('assigned_to', 'Assign to upload', 'required');
        $this->form_validation->set_rules('firstname', 'First Name', 'required');
        $this->form_validation->set_rules('middlename', 'Middle Name', 'required');
        $this->form_validation->set_rules('lastname', 'Last Name', 'required');

        if ($this->form_validation->run()) {

            $this->user_model->add_user();

            redirect('users/added');
        } else {
            if (validation_errors() != "") {
                $this->template_engine->assign("val_username", set_value('username'));
                $this->template_engine->assign("val_email", set_value('email'));
                $this->template_engine->assign("val_firstname", set_value('firstname'));
                $this->template_engine->assign("val_middlename", set_value('middlename'));
                $this->template_engine->assign("val_lastname", set_value('lastname'));
//                $this->template_engine->assign("val_assigned_to", set_value('assigned_to'));
                $this->template_engine->set_add_user_alert(validation_errors(), 'Error');
            }
            
            $this->index();
        }
    }

    public function added() {
        $this->template_engine->set_add_user_alert('Added Successfully!', 'Success');
        $this->index();
    }

    public function _output() {
        if ($this->session->userdata('username') == '') {
            redirect('administrator');
            exit;
        } else {

//            $this->load->model('category_model', '', TRUE);
//
//            $categories = $this->category_model->get_all_data();
//
//            $this->template_engine->assign('categories', $categories->result_array());

            $middle_initial = substr($this->session->userdata('middlename'), 0, 1) . '.';

            $this->template_engine->assign('username', $this->session->userdata('username'));
            $this->template_engine->assign('email', $this->session->userdata('email'));
            $this->template_engine->assign('firstname', $this->session->userdata('firstname'));
            $this->template_engine->assign('middlename', $this->session->userdata('middlename'));
            $this->template_engine->assign('middle_initial', $middle_initial);
            $this->template_engine->assign('lastname', $this->session->userdata('lastname'));
            $this->template_engine->assign('account_type', $this->session->userdata('account_type'));

            $this->template_engine->assign('footer', 'footer.tpl');
            $this->template_engine->assign('active_menu_item', 'Users');

            $this->template_engine->display('back.tpl');
        }
    }

}

?>
