<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Smarty
 *
 * @author Ozy Admin
 */
require_once 'smarty/Smarty.class.php';

class Template_engine extends Smarty {

    public function __construct() {
        parent::__construct();

//        $CI = & get_instance();

//        $path = $CI->config->item('path');

//        $templates['templates'] = $path . 'application/views/templates/';
//        $templates['header'] = $path . 'application/views/header/';
//        $templates['content'] = $path . 'application/views/content/';
//        $templates['sidebar'] = $path . 'application/views/sidebar/';
//        $templates['footer'] = $path . 'application/views/footer/';
//        $templates['modals'] = $path . 'application/views/modals/';
//
//        $this->setTemplateDir($templates);
//        $this->setCompileDir($path . 'application/libraries/smarty/templates_c/');
//        $this->setConfigDir($path . 'application/libraries/smarty/configs/');
//        $this->setCacheDir($path . 'application/libraries/smarty/cache/');
        
        $templates['templates'] = './application/views/templates/';
        $templates['header'] = './application/views/header/';
        $templates['content'] = './application/views/content/';
        $templates['sidebar'] = './application/views/sidebar/';
        $templates['footer'] = './application/views/footer/';
        $templates['modals'] = './application/views/modals/';

        $this->setTemplateDir($templates);
        $this->setCompileDir('./application/libraries/smarty/templates_c/');
        $this->setConfigDir('./application/libraries/smarty/configs/');
        $this->setCacheDir('./application/libraries/smarty/cache/');

        $this->caching = 0;

        $this->assign('alert', '');
        $this->assign('site_url', site_url());
        $this->assign('base_url', base_url());
    }

    public function set_alert($msg, $type = 'Warning') {

        if ($type == 'Error') {
            $alert_type = 'alert-error';
        } else if ($type == 'Success') {
            $alert_type = 'alert-success';
        } else if ($type == 'Info') {
            $alert_type = 'alert-info';
        }else{
            $alert_type = '';
        }

        $msg = strip_tags($msg);

        $alert = "<div class='alert " . $alert_type . " fade in'><strong>$type:</strong> $msg</div>";

        $this->assign('alert', $alert);
    }
    
    public function set_add_user_alert($msg, $type = 'Warning') {

        if ($type == 'Error') {
            $alert_type = 'alert-error';
        } else if ($type == 'Success') {
            $alert_type = 'alert-success';
        } else if ($type == 'Info') {
            $alert_type = 'alert-info';
        }

        $msg = strip_tags($msg);
        
        $dismiss = "<a href='#' class='close' data-dismiss='alert'>&times;</a>";
        $alert = "<div class='alert " . $alert_type . " fade in'>$dismiss<strong>$type!</strong> $msg</div>";

        $this->assign('add_user_alert', $alert);
    }
    
    public function set_upload_web_alert($msg, $type = 'Warning') {

        if ($type == 'Error') {
            $alert_type = 'alert-error';
        } else if ($type == 'Success') {
            $alert_type = 'alert-success';
        } else if ($type == 'Info') {
            $alert_type = 'alert-info';
        }

        $msg = strip_tags($msg);
        
        $dismiss = "<a href='#' class='close' data-dismiss='alert'>&times;</a>";
        $upload_web_alert = "<div class='alert " . $alert_type . " fade in'>$dismiss<strong>$type!</strong> $msg</div>";

        $this->assign('upload_web_alert', $upload_web_alert);
    }
    
    public function set_renew_alert($msg, $type = 'Warning') {

        if ($type == 'Error') {
            $alert_type = 'alert-error';
        } else if ($type == 'Success') {
            $alert_type = 'alert-success';
        } else if ($type == 'Info') {
            $alert_type = 'alert-info';
        }

        $msg = strip_tags($msg);
        
        $renew_alert = "<div class='alert " . $alert_type . " fade in'><strong>$type!</strong> $msg</div>";

        $this->assign('renew_alert', $renew_alert);
    }
    
    public function set_edit_web_alert($msg, $type = 'Warning') {

        if ($type == 'Error') {
            $alert_type = 'alert-error';
        } else if ($type == 'Success') {
            $alert_type = 'alert-success';
        } else if ($type == 'Info') {
            $alert_type = 'alert-info';
        }

        $msg = strip_tags($msg);
        $dismiss = "<a href='#' class='close' data-dismiss='alert'>&times;</a>";
        $edit_web_alert = "<div class='alert " . $alert_type . " fade in'>$dismiss<strong>$type!</strong> $msg</div>";

        $this->assign('edit_web_alert', $edit_web_alert);
    }

    public function set_edit_settings_alert($msg, $type = 'Warning') {

        if ($type == 'Error') {
            $alert_type = 'alert-error';
        } else if ($type == 'Success') {
            $alert_type = 'alert-success';
        } else if ($type == 'Info') {
            $alert_type = 'alert-info';
        }

        $msg = strip_tags($msg);
        $dismiss = "<a href='#' class='close' data-dismiss='alert'>&times;</a>";
        $edit_settings_alert = "<div class='alert " . $alert_type . " fade in'>$dismiss<strong>$type!</strong> $msg</div>";

        $this->assign('edit_settings_alert', $edit_settings_alert);
    }
    
    public function set_add_category_alert($msg, $type = 'Warning') {

        if ($type == 'Error') {
            $alert_type = 'alert-error';
        } else if ($type == 'Success') {
            $alert_type = 'alert-success';
        } else if ($type == 'Info') {
            $alert_type = 'alert-info';
        }

        $msg = strip_tags($msg);
        $dismiss = "<a href='#' class='close' data-dismiss='alert'>&times;</a>";
        $alert = "<div class='alert " . $alert_type . " fade in'>$dismiss<strong>$type!</strong> $msg</div>";

        $this->assign('add_category_alert', $alert);
    }
}

?>
