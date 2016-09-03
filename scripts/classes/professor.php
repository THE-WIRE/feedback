<?php

/**
 * Created by PhpStorm.
 * User: Omkar Dubas
 * Date: 03-09-2016
 * Time: 16:25
 */
 class Professor extends Department
 {
     public $prof_id = null;
     public $prof_name = null;
     public $prof_skills = null;

     public function add($prof_id, $prof_name)
     {
         $db = new ezSQL_mysqli(DB_USER, DB_PASS, DB_NAME, DB_HOST);
         $query = "INSERT INTO `professor`(`colg_id`,`prof_id`,`prof_name`,`dep_id`) VALUES('$this->col_id','$prof_id','$prof_name','$this->dept_id')";

         if ($db->query($query)) {

             $this->prof_id = $prof_id;
             $this->prof_name = $prof_name;

         } else {
             throw new Exception("Failed to add Professor. Database Error.");
         }
     }

     public function del($prof_id)
     {
         $db = new ezSQL_mysqli(DB_USER, DB_PASS, DB_NAME, DB_HOST);
         $query = "DELETE FROM `professor` WHERE `prof_id` = '$prof_id'";

         if ($db->query($query)) {

         } else {
             throw new Exception("Failed to delete Professor. Database Error.");
         }

     }

 }















