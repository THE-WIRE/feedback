<?php
/**
 * Created by PhpStorm.
 * User: itssu
 * Date: 06-Sep-16
 * Time: 10:55 PM
 */

require_once('../classes/department.php');

try{

    $c = new College();
    $data = $c->retrieveall();
    $datax = json_encode($data);
    echo '{"data" :'.$datax.'}';

}catch(Exception $e){
    echo $e->getMessage();
}