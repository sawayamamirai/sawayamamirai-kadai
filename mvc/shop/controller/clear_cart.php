<?php
session_start();

function handle($params) {
    require_once('./model/common.php');
    clearSession();
    $view_data=array();
    return $view_data;
}
?>

