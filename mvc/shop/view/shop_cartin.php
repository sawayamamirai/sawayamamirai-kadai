<?php
if(isset($_SESSION['member_login'])===false)
{
	print'ようこそゲスト様<br />';
	print'<a href="./member_login">会員ログイン</a><br />';
	print'<br />';
}
else
{
	print'ようこそ';
	print $_SESSION['member_name'];
	print'様';
	print'<a href="member_logout">ログアウト</a>';
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
	
	カートに追加しました。<br />
	<br />
	<a href="./shop_list">商品一覧に戻る</a>
	
</body>
</html>