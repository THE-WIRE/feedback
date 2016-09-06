<?php
/**
 * Created by PhpStorm.
 * User: itssu
 * Date: 04-Sep-16
 * Time: 12:11 PM
 */

require_once('../classes/department.php');

try{

    $d = new Department('1001');
    $data = $d->retrieveall();
    $datax = json_encode($data);
    echo '{"data" :'.$datax.'}';

}catch(Exception $e){
    echo $e->getMessage();
}