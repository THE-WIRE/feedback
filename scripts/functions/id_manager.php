<?php
/**
 * Created by PhpStorm.
 * User: itssu
 * Date: 05-Sep-16
 * Time: 9:05 AM
 */


define('COLG_LEN', 3);
define('DEPT_LEN', 2);
define('SUBJ_LEN', 2);


/**
 * @param null $dept_id     DEPARTMENT ID
 * @param null $sub_id      SUBJECT ID
 * @return string           CONCATENATED SUBJECT ID
 *
 *
 */
function gen_sub_id($dept_id, $sub_id)
{

    if (strlen($dept_id) < DEPT_LEN) {
        for ($i = 0; $i <= DEPT_LEN - strlen($dept_id); $i++) {
            $dept_id = "0" . $dept_id;
        }
    }

    if (strlen($sub_id) < SUBJ_LEN) {
        for ($i = 0; $i <= SUBJ_LEN - strlen($sub_id); $i++) {
            $sub_id = "0" . $sub_id;
        }
    }

    $uid = $dept_id . $sub_id;

    return $uid;
}

function gen_dept_id($col_id, $dept_id = null)
{
    if (strlen($col_id) < COLG_LEN) {
        for ($i = 0; $i <= COLG_LEN - strlen($col_id); $i++) {
            $col_id = "0" . $col_id;
        }
    }

    if (strlen($dept_id) < DEPT_LEN) {
        for ($i = 0; $i <= DEPT_LEN - strlen($dept_id); $i++) {
            $dept_id = "0" . $dept_id;
        }
    }

    $uid = $col_id . $dept_id;

    return $uid;
}


/**
 * @param $uid
 * @return string
 */
function get_col_id($uid){
    return substr($uid, 0, COLG_LEN);
}

/**
 * @param $uid
 * @return string
 */
function get_dept_id($uid){
    return substr($uid, COLG_LEN, DEPT_LEN);
}

/**
 * @param $uid
 * @return string
 */
function get_sub_id($uid){
    return substr($uid, DEPT_LEN, SUBJ_LEN);
}