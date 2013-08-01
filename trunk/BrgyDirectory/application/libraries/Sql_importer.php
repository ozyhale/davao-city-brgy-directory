<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Sql_importer
 *
 * @author Ozy Admin
 */
require_once 'phpmyimporter/phpMyImporter.php';

class Sql_importer extends phpMyImporter{
    //put your code here
    public function __construct($params) {
        parent::phpMyImporter($params['database'], $params['connection'], $params['file']);
    }
}

?>
