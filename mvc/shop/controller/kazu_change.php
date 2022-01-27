<?php
session_start();

function handle($params) {
	require_once('./model/common.php');
	session_regenerate_id(true);
	
	$post=sanitize($_POST);
	$max=$post['max'];
	
	for($i=0;$i<$max;$i++) {
		if(preg_match("/^[0-9]+$/",$post['kazu'.$i])==0) {
			print'数量に誤りがあります。';
			print'<a href="./shop_cartlook">カートに戻る</a>';
			exit();
		}
		if($post['kazu'.$i]<1 || 10<$post['kazu'.$i]) {
			print'数量は必ず１個以上、１０個までです。';
			print'<a href="./shop_cartlook">カートに戻る</a>';
			exit();
		}
		$kazu[]=$post['kazu'.$i];
	}
	
	$cart=$_SESSION['cart'];
	
	for($i=$max;0<=$i;$i--)
	{
		if(isset($_POST['sakujo'.$i])==true)
		{
			array_splice($cart,$i,1);
			array_splice($kazu,$i,1);
		}
	}
	
	$_SESSION['cart']=$cart;
	$_SESSION['kazu']=$kazu;
	
	header('Location: ./shop_cartlook');
	exit();
	
	$view_data=array();
	return $view_data;
}

?>
