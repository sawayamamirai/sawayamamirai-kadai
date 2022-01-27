<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>ろくまる農園</title>
	</head>
	<body>
		
		商品情報参照<br />
		<br />
		商品コード<br />
		<?php print $pro_code;?>
		<br />
		商品名<br />
		<?php print $pro_name;?>
		<br />
		価格<br />
		<?php print $pro_price;?>円
		<br />
		<br />
		<?php print $disp_gazou;?>
		<br />
	    <?php print '<a href="./shop_cartin?procode=' .$pro_code. '">カートに入れる</a>' ?>
		<form>
		<input type="button" onclick="history.back()" value="戻る";>
	    </form>
		
	</body>
</html>