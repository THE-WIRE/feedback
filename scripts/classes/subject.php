<?php
require_once('department.php');

class Subject extends Department
{
    public $sub_id = null;
    public $sub_name = null;
    public $sem = null;

    function __construct($col_id, $dept_id, $sub_id = null)
    {
        parent::__construct($col_id, $dept_id);

        if($sub_id == null){
            //return $this->retrieveAll();
        }
        else{

            $this->sub_id = $sub_id;
            $this->retrieve();    
        }
        
    }
    
    private function retrieve(){
        $db = new ezSQL_mysqli(DB_USER, DB_PASS, DB_NAME, DB_HOST);
        $query = "SELECT * FROM `subject` WHERE `sub_id` = '$this->sub_id'";

        if($res = $db->get_row($query)){
            $this->sub_name = $res->sub_name;
            $this->sem      = $res->sub;
        }else{
            throw new Exception('Failed retrieving subject information. Database Error.');
        }
    }
    
    public function retrieveAll(){
        $db = new ezSQL_mysqli(DB_USER, DB_PASS, DB_NAME, DB_HOST);
        $query = "SELECT * FROM `subject` WHERE `dep_id` = '$this->dept_id'";

        if($res = $db->get_results($query)){
            return $res;
        }else{
            throw new Exception('Failed retrieving subjects information. Database Error.');
        }
    }

    /**
     * @return null
     */
    public function getSubName()
    {
        return $this->sub_name;
    }

    /**
     * @return null
     */
    public function getSem()
    {
        return $this->sem;
    }

    /**
     * @return null
     */
    public function getSubId()
    {
        return $this->sub_id;
    }

    public function add($sub_id,$sub_name,$sem)
    {
        $db = new ezSQL_mysqli(DB_USER, DB_PASS, DB_NAME, DB_HOST);
        $query="INSERT INTO `subject`( `colg_id`,`sub_id`,`sub_name`,`dep_id`,`sem`) VALUES (`$this->col_id`,`$sub_id`,`$sub_name`,`$this->dept_id`,`$sem`)";

        if($db->query($query))
        {
            $this->sub_id = $sub_id;
            $this->sub_name = $sub_name;
            $this->sem = $sem;
        }
        else
        {
            throw new Exception('failed adding subject in database');
        }
    }

    public function delete($sub_id)
    {
        $db = new ezSQL_mysqli(DB_USER, DB_PASS, DB_NAME, DB_HOST);
        $query="DELETE FROM `subject` WHERE `sub_id`=$sub_id";

        if($db->query($query))
        {

        }
        else
        {
            throw new Exception('deletion failed , failed to connect database');
        }
    }

    public function update($sub_id){

        $db = new ezSQL_mysqli(DB_USER, DB_PASS, DB_NAME, DB_HOST);
        $query = "UPDATE `subject` SET (`sub_id = $sub_id`)";

        if($db->query($query)){

        }else{
            throw new Exception("Failed to update Subject. Database Error");
        }
    }
}


