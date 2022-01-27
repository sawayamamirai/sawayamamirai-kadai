<?php
session_start();
function handle($params) {
	session_regenerate_id(true);
	require_once('./model/common.php');
	
	try {
		
		if(isset($_SESSION['cart'])==true) {
			$cart=$_SESSION['cart'];
			$kazu=$_SESSION['kazu'];
			$max=count($cart);
		} else {
			$max=0;
		}
		
		if($max==0) {
			print'カートに商品が入っていません。<br />';
			print'<br />';
			print'<a href="./shop_list">商品一覧へ戻る</a>';
			exit();
		}
		
		foreach($cart as $key=>$val) {
			$sql='SELECT code,name,price,gazou FROM mst_product WHERE code=?';
			$data[0]=$val;
			$stmt=executeSql($sql,$data);
			$rec=$stmt->fetch(PDO::FETCH_ASSOC);
			$pro_name[]=$rec['name'];
			$pro_price[]=$rec['price'];
			
			if($rec['gazou']=='') {
				$pro_gazou[]='';
			} else {
				$pro_gazou[]='<img src="../product/gazou/'.$rec['gazou'].'">';
			}
		}
		$dbh = null;
	} catch(Exception $e) {
		displayError();
	}
	
	$view_data=array();
	$view_data['pro_name']=$pro_name;
	$view_data['pro_gazou']=$pro_gazou;
	$view_data['pro_price']=$pro_price;
	$view_data['max']=$max;
	$view_data['kazu']=$kazu;
	
	return $view_data;
}
?>

