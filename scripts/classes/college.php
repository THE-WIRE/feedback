<?php

/**
 * Created by PhpStorm.
 * User: itssu
 * Date: 03-Sep-16
 * Time: 4:31 PM
 */

require_once('../config.php');
require_once('../sql/shared/ez_sql_core.php');
require_once('../sql/mysqli/ez_sql_mysqli.php');

class College
{
    public $col_id = '';
    public $col_name = '';

    function __construct($col_id = null){

        if($col_id == null){
            //retrieve all
        }
        else{
            $this->col_id = $col_id;
            $this->retrieve();
        }

    }

    private function retrieve(){
        $db = new ezSQL_mysqli(DB_USER, DB_PASS, DB_NAME, DB_HOST);
        $query = "SELECT * FROM `college` WHERE `colg_id` = '$this->col_id'";

        if($res = $db->get_row($query)){
            $this->col_name = $res->colg_name;
        }else{
            throw new Exception('Failed retrieving college information. Database Error.');
        }
    }

    public function retrieveAll(){
        $db = new ezSQL_mysqli(DB_USER, DB_PASS, DB_NAME, DB_HOST);
        $query = "SELECT * FROM `college`";

        if($res = $db->get_results($query)){
            return $res;
        }else{
            throw new Exception('Failed retrieving colleges information. Database Error.');
        }
    }



     /**
     * @return string
     */
    public function getColName()
    {
        return $this->col_name;
    }

    /**
     * @return string
     */
    public function getColId()
    {
        return $this->col_id;
    }

    public function add($col_id, $col_name){

        $db = new ezSQL_mysqli(DB_USER, DB_PASS, DB_NAME, DB_HOST);
        $query = "INSERT INTO `college`(`colg_id`, `colg_name`) VALUES('$col_id', '$col_name')";

        if($db->query($query)){
            $this->col_id   = $col_id;
            $this->col_name = $col_name;
        }else{
            throw new Exception('Failed adding new college. Database Error.');
        }

    }

    public function delete($col_id){

        $db = new ezSQL_mysqli(DB_USER, DB_PASS, DB_NAME, DB_HOST);
        $query = "DELETE FROM `college` WHERE `colg_id` = '$col_id'";

        if($db->query($query)){

        }else{
            throw new Exception('Failed deleting college. Database Error.');
        }
    }

    public function update($col_id){

        $db = new ezSQL_mysqli(DB_USER, DB_PASS, DB_NAME, DB_HOST);
        $query = "UPDATE `college` SET (`col_id = $col_id`)";

        if($db->query($query)){

        }else{
            throw new Exception("Failed to update College. Database Error");
        }
    }
}