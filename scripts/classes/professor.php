

<?php

/**
 * Created by PhpStorm.
 * User: Omkar Dubas
 * Date: 03-09-2016
 * Time: 16:25
 */

require_once('department.php');

 class Professor extends Department
 {
     public $prof_id = null;
     public $prof_name = null;

     function __construct($col_id, $dept_id, $prof_id = null)
     {
         parent::__construct($col_id, $dept_id);

         if($prof_id == null){

         }
         else{

             $this->prof_id = $prof_id;
             $this->retrieve();
         }
     }

     private function retrieve(){
         $db = new ezSQL_mysqli(DB_USER, DB_PASS, DB_NAME, DB_HOST);
         $query = "SELECT * FROM `profesor` WHERE `prof_id` = '$this->prof_id'";

         if($res = $db->get_row($query)){
             $this->prof_name = $res->prof_name;
         }else{
             throw new Exception('Failed retrieving professor information. Database Error.');
         }
     }

     public function retrieveAll()
     {
         $db = new ezSQL_mysqli(DB_USER, DB_PASS, DB_NAME, DB_HOST);
         $query = "SELECT * FROM `professor` WHERE `dep_id` = '$this->dept_id'";

         if($res = $db->get_results($query)){
             return $res;
         }else{
             throw new Exception('Failed retrieving professors information. Database Error.');
         }
     }

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

     public function update($prof_id){

         $db = new ezSQL_mysqli(DB_USER, DB_PASS, DB_NAME, DB_HOST);
         $query = "UPDATE `professor` SET (`prof_id = $prof_id`)";

         if($db->query($query)){

         }else{
             throw new Exception("Failed to update Professor. Database Error ");
         }
     }

 }















