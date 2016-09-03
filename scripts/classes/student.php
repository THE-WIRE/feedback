<?php

/**
 * Created by PhpStorm.
 * User: Omkar Dubas
 * Date: 03-09-2016
 * Time: 23:23
 */

require_once('../config.php');
require_once('../sql/shared/ez_sql_core.php');
require_once('../sql/mysqli/ez_sql_mysqli.php');
require_once('college.php');


class Student extends Comments
{
    protected $rating = null;

    public function give($rating){
        $db = new ezSQL_mysqli(DB_USER, DB_PASS, DB_NAME, DB_HOST);
        $query = "INSERT INTO `student`(`$rating`, `$this->comments`)";

        if($db->query($query)){
            $this->rating = $rating;
        }else{
            throw new Exception("Failed to provide Ratings. Database Error");
        }
    }



}