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

    function __construct($col_id, $dept_id = null)
    {
        parent::__construct($col_id);

        if($dept_id == null){
            //$this->retrieveAll();
        }
        else{

            $this->dept_id = $dept_id;
            $this->retrieve();
        }

    }

    private function retrieve(){
        $db = new ezSQL_mysqli(DB_USER, DB_PASS, DB_NAME, DB_HOST);
        $query = "SELECT * FROM `department` WHERE `dep_id` = '$this->dept_id'";

        if($res = $db->get_row($query)){
            $this->dept_name = $res->dep_name;
        }else{
            throw new Exception('Failed retrieving college information. Database Error.');
        }
    }

    public function retrieveAll(){
        $db = new ezSQL_mysqli(DB_USER, DB_PASS, DB_NAME, DB_HOST);
        $query = "SELECT * FROM `department` WHERE `colg_id` = '$this->col_id'";

        if($res = $db->get_results($query)){
            return $res;
        }else{
            throw new Exception('Failed retrieving departments information. Database Error.');
        }
    }

    /**
     * @return string
     */
    public function getDeptName()
    {
        return $this->dept_name;
    }

    /**
     * @return string
     */
    public function getDeptId()
    {
        return $this->dept_id;
    }

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

    public function update($dep_id){

        $db = new ezSQL_mysqli(DB_USER, DB_PASS, DB_NAME, DB_HOST);
        $query = "UPDATE `department` SET (`dep_id = $dep_id`)";

        if($db->query($query)){

        }else{
            throw new Exception("Failed to update Department. Database Error");
        }


    }

}
