<?php

/**
 * Created by PhpStorm.
 * User: itssu
 * Date: 03-Sep-16
 * Time: 4:31 PM
 */
class College
{
    public $col_id = '';
    public $col_name = '';

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
}