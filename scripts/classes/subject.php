<?php
require_once('department.php');

class Subject extends Department
{
    public $sub_id = null;
    public $sub_name = null;
    public $sem = null;

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
}