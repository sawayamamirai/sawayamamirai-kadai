<?php
session_start();

function handle($params) {
	session_regenerate_id(true);
	require_once('./model/common.php');
	try {
		
		$pro_code=$_GET['procode'];
		
		if(isset($_SESSION['cart'])==true) {
			$cart=$_SESSION['cart'];
			$kazu=$_SESSION['kazu'];
			if(in_array($pro_code,$cart)==true) {
				print'その商品はすでにカートに入っています。<br />';
				print'<a href="./shop_list">商品一覧に戻る</a>';
				exit();
			}
		}
		$cart[]=$pro_code;
		$kazu[]=1;
		$_SESSION['cart']=$cart;
		$_SESSION['kazu']=$kazu;
	} catch(Exception $e) {
		displayError();
	}
	$view_data=array();
	return $view_data;
}

?>
