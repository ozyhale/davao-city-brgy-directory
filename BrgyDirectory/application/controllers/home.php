<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of home
 * Front Home Page
 *
 * @author Ozy Admin
 */
class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('website_model', '', TRUE);

        $this->template_engine->assign('title', get_class($this) . ' - ' . $this->config->item('site_name'));
        $this->template_engine->assign('footer', 'footer.tpl');
    }

    public function index() {

        $this->load->helper("security");

        $search = strip_tags(xss_clean($this->input->get('search')));

        if (!empty($search)) {

            $searched = $this->website_model->search_by_name($search);

            $this->template_engine->assign('searched', $searched->result_array());
            $this->template_engine->assign('search', $search);
        } else {
            $district1 = $this->website_model->get_actives_by_district("District I");
            $district2 = $this->website_model->get_actives_by_district("District II");
            $district3 = $this->website_model->get_actives_by_district("District III");

            $district1_arr = $district1->result_array();
            $district2_arr = $district2->result_array();
            $district3_arr = $district3->result_array();
            
            shuffle($district1_arr);
            shuffle($district2_arr);
            shuffle($district3_arr);
            
            $this->template_engine->assign('district1', $district1_arr);
            $this->template_engine->assign('district2', $district2_arr);
            $this->template_engine->assign('district3', $district3_arr);

            $query = $this->website_model->get_actives();

            $this->template_engine->assign('brgys', $query->result_array());
        }

        $this->template_engine->assign('active_menu_item', 'Home');
        $this->template_engine->assign('content', 'front_home.tpl');
        $this->template_engine->display('front.tpl');
    }

    public function districts($district = '') {

        if ($district == '') {
            $this->index();
            return;
        }

        if ($district == 1) {

            $district1 = $this->website_model->get_actives_by_district("District I");

            $this->template_engine->assign('district1', $district1->result_array());
            $this->template_engine->assign('content', 'front_district1.tpl');
            $this->template_engine->assign('active_menu_item', 'District1');
        }

        if ($district == 2) {

            $district2 = $this->website_model->get_actives_by_district("District II");

            $this->template_engine->assign('district2', $district2->result_array());
            $this->template_engine->assign('content', 'front_district2.tpl');
            $this->template_engine->assign('active_menu_item', 'District2');
        }

        if ($district == 3) {

            $district3 = $this->website_model->get_actives_by_district("District III");

            $this->template_engine->assign('district3', $district3->result_array());
            $this->template_engine->assign('content', 'front_district3.tpl');
            $this->template_engine->assign('active_menu_item', 'District3');
        }

        $this->template_engine->display('front.tpl');
    }

}

?>
