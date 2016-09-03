<?php
/**
 * Created by PhpStorm.
 * User: adikr
 * Date: 03-09-2016
 * Time: 11:23 PM
 */

require_once('college.php');
require_once('subject.php');
require_once('professor.php');
require_once('questions.php');


class FeedA
{
    // add subject
    public function add_sub($sub_id,$sub_name,$sem)
    {
        $s=new Subject();
        $s->add($sub_id,$sub_name,$sem);
    }

    //add professor
    public function add_prof($prof_id, $prof_name)
    {
        $p=new Professor();
        $p->add($prof_id, $prof_name);
    }

    //add question
    public function add_que($q_id, $question)
    {
        $q=new Questions();
        $q->add($q_id, $question);
    }


}