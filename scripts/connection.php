<?php
/**
 * Created by PhpStorm.
 * User: itssu
 * Date: 03-Sep-16
 * Time: 3:24 PM
 */
require_once('config.php');
$db = new ezSQL_mysqli(DB_USER, DB_PASS, DB_NAME, DB_HOST);