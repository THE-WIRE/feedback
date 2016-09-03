<?php

/**
 * Created by PhpStorm.
 * User: itssu
 * Date: 03-Sep-16
 * Time: 3:00 PM
 */
class Department
{

        public function add(){
            
            include('../connection.php');
            $db->get_results('SELECT * FROM `department`');
            $db->debug();
        }

}

$d = new Department();
$d->add();