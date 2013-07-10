<?php


class Developer extends CI_Controller {

    public function __construct() {
        parent::__construct();
        
        $this->template_engine->assign('title', get_class($this) . ' - ' . $this->config->item('site_name'));
    }

    public function index() {
        $this->template_engine->assign('active_menu_item', 'About');
        $this->template_engine->assign('content', 'developers.tpl');
        $this->template_engine->assign('footer', 'footer.tpl');
        $this->template_engine->display('front.tpl');
    }
}
?>
