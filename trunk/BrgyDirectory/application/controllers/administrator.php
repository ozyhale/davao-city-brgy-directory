<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Administrator extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->library('session');
        $this->load->helper('form');

        $this->template_engine->assign('title', get_class($this) . ' - ' . $this->config->item('site_name'));
    }

    public function index() {
        $this->template_engine->assign('content', 'back_home.tpl');
    }

    public function login() {

        $this->load->library('form_validation');
        $this->load->helper('security');

        $this->form_validation->set_rules('username', 'Username', 'required|alpha_dash');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run()) {

            $this->load->model('user_model', '', true);

            $username = $this->input->post('username');
            $password = do_hash($this->input->post('password'));

            $user_info = $this->user_model->get_user_info($username, $password);
            
            if ($user_info != null) {

                unset($user_info['password']);

                $this->session->set_userdata($user_info);

                header("Location: " . site_url('administrator'));
                exit;
            } else {
                $this->template_engine->set_alert('Wrong Password or Username!', 'Error');
            }
        } else {
            if (validation_errors() != "") {
                $this->template_engine->set_alert(validation_errors(), 'Error');
            }
        }
    }

    public function logout() {

        if ($this->session->userdata('id') != '') {
            $this->session->sess_destroy();
            $this->template_engine->set_alert('Succesfully Logout!', 'Success');
        }
    }

    public function _output() {
        if ($this->session->userdata('username') == '') {
            $this->_login_page();
        } else {
            $this->_back_page();
        }
    }

    private function _login_page() {
        $this->template_engine->assign('footer', 'footer.tpl');
        $this->template_engine->display('login.tpl');
    }

    public function update_settings() {

        $this->load->library('form_validation');
        $this->load->model('user_model', '', TRUE);
        $this->load->helper('security');

        $data = $this->user_model->get_user_info_by_id($this->session->userdata('id'));

        if ($data['password'] != do_hash($this->input->post('authpass'))) {
            $this->template_engine->set_edit_settings_alert("Wrong password!", 'Error');
            $this->index();
            return;
        }

        if ($this->session->userdata('username') != $this->input->post('username')) {
            $this->form_validation->set_rules('username', 'Username', 'required|alpha_dash|min_length[7]|is_unique[users.username]');
        }

        if ($this->input->post('password') != '') {
            $this->form_validation->set_rules('password', 'Password', 'min_length[7]');
            $this->form_validation->set_rules('confpass', 'Confirm Password', 'min_length[7]|matches[password]');
            $this->user_model->password = do_hash($this->input->post('password'));
        }

        if ($this->session->userdata('email') != $this->input->post('email')) {
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
            $this->user_model->email = $this->input->post('email');
        }

        $this->form_validation->set_rules('firstname', 'First Name', 'required');
        $this->form_validation->set_rules('middlename', 'Middle Name', 'required');
        $this->form_validation->set_rules('lastname', 'Last Name', 'required');

        if (!$this->form_validation->run()) {
            $this->template_engine->set_edit_settings_alert(validation_errors(), 'Error');
            $this->index();
            return;
        }

        $this->user_model->update_settings($data['id']);

        $user_info = $this->user_model->get_user_info_by_id($data['id']);

        if ($user_info != null) {

            unset($user_info['password']);

            $this->session->set_userdata($user_info);
        }

        redirect('administrator/updated_settings');
    }

    public function updated_settings() {
        $this->template_engine->set_edit_settings_alert("Settings updated successfully!", 'Success');
        $this->index();
    }

    private function _back_page() {

//        $this->load->model('category_model', '', TRUE);
//
//        $categories = $this->category_model->get_all_data();
//        
//        $this->template_engine->assign('categories', $categories->result_array());
        
        $middle_initial = substr($this->session->userdata('middlename'), 0, 1) . '.';

        $this->template_engine->assign('username', $this->session->userdata('username'));
        $this->template_engine->assign('email', $this->session->userdata('email'));
        $this->template_engine->assign('firstname', $this->session->userdata('firstname'));
        $this->template_engine->assign('middlename', $this->session->userdata('middlename'));
        $this->template_engine->assign('middle_initial', $middle_initial);
        $this->template_engine->assign('lastname', $this->session->userdata('lastname'));
        $this->template_engine->assign('account_type', $this->session->userdata('account_type'));

        $this->template_engine->assign('footer', 'footer.tpl');
        $this->template_engine->assign('active_menu_item', 'Home');

        $this->template_engine->display('back.tpl');
    }

}

?>
