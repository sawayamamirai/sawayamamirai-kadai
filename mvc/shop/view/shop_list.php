<?php
if(isset($_SESSION['member_login'])==false)
{
	print'ようこそゲスト様<br />';
	print'<a href="member_login">会員ログイン</a><br />';
	print'<br />';
}
else
{
	print'ようこそ';
	print $_SESSION['member_name'];
	print'様';
	print'<a href="member_logout">ログアウト</a><br />';
	print'<br />';
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>ろくまる農園</title>
</head>
<body>

	<?php
		
		try {
			print'商品一覧<br /><br />';
			
			
			foreach($rec as $value){
				print'<a href="shop_product?procode='.$value['code'].'">';
				print $value['name'].'---';
				print $value['price'].'円';
				print'</a>';
				print'<br />';
			}
			
			
			print'<br />';
			print'<a href="./shop_cartlook">カートを見る</a><br />';
			
		}catch(Exception $e){
			displayError();
		}
		
	?>
</body>
</html>