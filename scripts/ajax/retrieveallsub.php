<?php
/**
 * Created by PhpStorm.
 * User: itssu
 * Date: 06-Sep-16
 * Time: 10:55 PM
 */

require_once('../classes/subject.php');

try{

    $s = new Subject('1001', '2002');
    $data = $s->retrieveall();
    $datax = json_encode($data);
    echo '{"data" :'.$datax.'}';

}catch(Exception $e){
    echo $e->getMessage();
}