<?php
require_once('../config.php');
require_once('sql/shared/ez_sql_core.php');
require_once('sql/mysqli/ez_sql_mysqli.php');

class Subject extends Department
{
    public $sub_id = null;
    public $sub_name = null;
    public $sem = null;

    public function add($sub_id,$sub_name,$dep_id,$sem)
    {
        $db = new ezSQL_mysqli(DB_USER, DB_PASS, DB_NAME, DB_HOST);
        $query="INSERT INTO `subject`( `colg_id`,`sub_id`,`sub_name`,`dep_id`,`sem`) VALUES (`$this->colg_id`,`$sub_id`,`$sub_name`,`$this->dep_id`,`$sem`)";

        if($db->query($query))
        {
            $this->colg_id= $this->colg_id;
            $this->sub_id = $sub_id;
            $this->sub_name = $sub_name;
            $this->dep_id = $this->dep_id ;
            $this->sem = $sem;
        }
        else
        {
            throw new Exception('failed adding subject in database');
        }
    }
}