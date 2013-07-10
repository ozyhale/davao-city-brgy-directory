<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of home
 * Front About Page
 *
 * @author Ozy Admin
 */
class About extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->template_engine->assign('title', get_class($this) . ' - ' . $this->config->item('site_name'));
    }

    public function index() {
//
//        $this->load->model('category_model', '', TRUE);
//
//        $categories = $this->category_model->get_all_data();
//
//        $this->template_engine->assign('categories', $categories->result_array());

        $this->template_engine->assign('active_menu_item', 'About');
        $this->template_engine->assign('content', 'front_about.tpl');
        $this->template_engine->assign('footer', 'footer.tpl');
        $this->template_engine->display('front.tpl');
    }

}

?>
