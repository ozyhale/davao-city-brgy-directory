<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Global_codes
 *
 * @author Ozy Admin
 */
class Global_codes {

    //put your code here
    public function __construct() {
        
        $CI = & get_instance();
        
        if (array_search('mod_rewrite', apache_get_modules()) !== FALSE) {
            $CI->config->set_item('index_page', '');
        }
    }

}

?>
