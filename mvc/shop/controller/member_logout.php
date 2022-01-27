<?php
function handle($params) {
	session_start();
	require_once('./model/common.php');
	clearSession();
	$view_data=array();
	return $view_data;
}
?>

