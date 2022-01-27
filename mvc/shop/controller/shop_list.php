<?php
session_start();
function handle($params) {
	$view_data=array();
	require_once('./model/common.php');
	session_regenerate_id(true);
	
	try {
		$sql='SELECT code,name,price FROM mst_product WHERE 1';
		$stmt=executeSql($sql);
		$dbh =null;
		
		while(true) {
			$rec=$stmt->fetch(PDO::FETCH_ASSOC);
			if($rec==false) {
				break;
			}
			$view_data['rec'][]=$rec;
			
		}
	} catch(Exception $e) {
		displayError();
	}
	
	return $view_data;
}
?>