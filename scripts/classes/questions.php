
<?php

/**
 * Created by PhpStorm.
 * User: Omkar Dubas
 * Date: 03-09-2016
 * Time: 18:12
 */

require_once('../config.php');
require_once('sql/shared/ez_sql_core.php');
require_once('sql/mysqli/ez_sql_mysqli.php');
require_once('college.php');

class Questions extends Subject
{
    protected $q_id = null;
    protected $question = null;

    public function add($q_id, $question){
        $db = new ezSQL_mysqli(DB_USER, DB_PASS, DB_NAME, DB_HOST);
        $query = "INSERT INTO `questions`(`$q_id`,`$question`,) VALUES(`$q_id`,`$question`,`$this->sub_id`)";

        if($db->query($query)){
            $this->q_id = $q_id;
            $this->question = $question;
        }else{
            throw new Exception("Failed to add Question. Database Error");
        }
    }

    public function del($q_id,$question){
        $db = new ezSQL_mysqli(DB_USER, DB_PASS, DB_NAME, DB_HOST);
        $query = "DELETE FROM `questions` WHERE (`q_id = `$q_id`)";

        if ($db->query($query)){

        }
        else{
            throw new Exception("Failed to delete Questions. Database Error");
        }
    }

}