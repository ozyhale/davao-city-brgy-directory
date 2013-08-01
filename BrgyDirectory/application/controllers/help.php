<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Help extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->template_engine->assign('title', get_class($this) . ' - ' . $this->config->item('site_name'));
    }

    public function index() {
        $this->template_engine->assign('content', 'back_help.tpl');
    }

    public function _output() {

        $this->load->library('session');

        if ($this->session->userdata('username') == '') {
            redirect('/administrator');
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
            $this->template_engine->assign('active_menu_item', 'Help');

            $this->template_engine->display('back.tpl');
        }
    }

}

?>
