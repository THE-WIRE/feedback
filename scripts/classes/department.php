<?php

/**
 * Created by PhpStorm.
 * User: itssu
 * Date: 03-Sep-16
 * Time: 3:00 PM
 */

require_once('../config.php');
require_once('../sql/shared/ez_sql_core.php');
require_once('../sql/mysqli/ez_sql_mysqli.php');
require_once('college.php');


class Department extends College
{
    protected $dept_id    = '';
    protected $dept_name  = '';

    public function add($dept_id, $dept_name){

        $db = new ezSQL_mysqli(DB_USER, DB_PASS, DB_NAME, DB_HOST);
        $query = "INSERT INTO `department`(`dep_id`, `dep_name`, `colg_id`) VALUES('$dept_id', '$dept_name', '$this->col_id')";

        if($db->query($query)){
            $this->dept_id   = $dept_id;
            $this->dept_name = $dept_name;
        }else{
            throw new Exception('Failed adding new department. Database Error.');
        }

    }

    public function delete($dept_id){

        $db = new ezSQL_mysqli(DB_USER, DB_PASS, DB_NAME, DB_HOST);
        $query = "DELETE FROM `department` WHERE `dep_id` = '$dept_id'";

        if($db->query($query)){

        }else{
            throw new Exception('Failed deleting department. Database Error.');
        }
    }

}
