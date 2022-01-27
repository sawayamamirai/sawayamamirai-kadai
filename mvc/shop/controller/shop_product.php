<?php
session_start();
function handle($params) {
	
	require_once('./model/common.php');
	session_regenerate_id(true);
	try {
		$pro_code=$_GET['procode'];
		
		$sql='SELECT name,price,gazou FROM mst_product WHERE code=?';
		$data[]=$pro_code;
		$stmt=executeSql($sql,$data);
		
		$rec=$stmt->fetch(PDO::FETCH_ASSOC);
		$pro_name=$rec['name'];
		$pro_price=$rec['price'];
		$pro_gazou_name=$rec['gazou'];
		
		$dbh=null;
		
		if($pro_gazou_name=='') {
			$disp_gazou='';
		} else {
			$disp_gazou='<img src="../product/gazou/'.$pro_gazou_name.'">';
		}
		
	} catch(Exception $e) {
		displayError();
	}
	
	$view_data=array();
	$view_data['pro_code']=$pro_code;
	$view_data['pro_name']=$pro_name;
	$view_data['pro_price']=$pro_price;
	$view_data['disp_gazou']=$disp_gazou;
	
	return $view_data;
}
?>
