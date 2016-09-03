<?php

/**
 * Created by PhpStorm.
 * User: Omkar Dubas
 * Date: 03-09-2016
 * Time: 16:25
 */
 class Professor
 {
     public $prof_id = null;
     public $prof_name = null;
     public $prof_skills = null;
     public $dep_id = null;
     public $colg_id = null;

     public function add($prof_id, $prof_name, $dep_id, $colg_id)
     {
         $db = new ezSQL_mysqli(DB_USER, DB_PASS, DB_NAME, DB_HOST);
         $query = "INSERT INTO `professor`(`colg_id`,`prof_id`,`prof_name`,`dep_id`) VALUES('colg_id','prof_id','prof_name','dep_id')";

         if ($db->query($query)) {
             $this->colg_id = $colg_id;
             $this->prof_id = $prof_id;
             $this->prof_name = $prof_name;
             $this->dep_id = $dep_id;
         } else {
             throw new Exception("Failed to add professor ");
         }
     }

     public function del($prof_id, $prof_name, $dep_id, $col_id)
     {
         $db = new ezSQL_mysqli(DB_USER, DB_PASS, DB_NAME, DB_HOST);
         $query = "DELETE `professor`(colg_id`,`prof_id`,`prof_name`,`dep_id`) WHERE (colg_id = 0) FROM `professor`";

         if ($db->query($query)) {
             $this->colg_id = $col_id;
             $this->prof_id = $prof_id;
             $this->prof_name = $prof_name;
             $this->dep_id = $dep_id;
         } else {
             throw new Exception("Failed to delete professor ");
         }

     }

 }















