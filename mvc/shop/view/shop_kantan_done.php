<?php
if(isset($_SESSION['member_login'])==false)
{
	print'ログインされていません。';
	print'<a href="shop_list.php">商品一覧へ</a>';
	exit();
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
			print $onamae.'様<br />';
			print'ご注文ありがとうございました。<br />';
			print $email.'にメールを送りましたのでご確認ください。<br />';
			print'商品は以下の住所に発送させて頂きます。<br />';
			print $postal1.'-'.$postal2.'<br />';
			print $address.'<br />';
			print $tel.'<br /><br />';
		?>
		<br />
		<a href="./shop_list">商品画面へ</a>
</body>
</html>