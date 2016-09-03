<?php

/**
 * Created by PhpStorm.
 * User: Omkar Dubas
 * Date: 03-09-2016
 * Time: 18:39
 */

require_once('../config.php');
require_once('sql/shared/ez_sql_core.php');
require_once('sql/mysqli/ez_sql_mysqli.php');
require_once('college.php');

class Comments extends Subject
{
    protected $comments = null;

    public function add($comments){
        $db = new ezSQL_mysqli(DB_USER, DB_PASS, DB_NAME, DB_HOST);
        $query = "INSERT INTO `comments`(`$comments`, `$this->sub_id`, `$this->prof_id`)";

        if($db->query($query)){
            $this->comments = $comments;
        }else{
            throw new Exception("Failed to add Comments. Database Error");
        }
    }

    public function del($comments){
        $db = new ezSQL_mysqli(DB_USER, DB_PASS, DB_NAME, DB_HOST);
        $query = "DELETE FROM `comments`WHERE (`comments = $comments`)";

        if($db->query($query)){

        }else{
            throw new Exception("Failed to delete Comments. Database Error");
        }
    }


}