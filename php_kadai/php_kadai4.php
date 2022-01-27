<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>PHPの基本</title>
</head>

<body>
<?php
		
		print'(1)<br>';
		
		$week=array("月曜日","火曜日","水曜日","木曜日","金曜日");
		print_r($week);
		print'<br>';
		
		print'(2)<br>';
		
		$color=array("red"=>"赤","blue"=>"青","yellow"=>"黄","green"=>"緑");
		print_r($color);
		print'<br>';
		
		print'(3)<br>';
		
		if(in_array('月曜日',$week)){
			echo'月曜日<br>';
		}
		
		$color_name=$color["green"];
		print $color_name.'<br>';
		
		print'(4)<br>';
		
		$cnt_week=count($week);
		$cnt_color=count($color);
		echo $cnt_week.'個<br>';
		echo $cnt_color.'個<br>';
		
		print'(5)<br>';
		
		$user=[
		
		'佐藤'=>['年齢'=>30,'性別'=>'男性','出身'=>'東京'],
		'田中'=>['年齢'=>25,'性別'=>'女性','出身'=>'沖縄'],
		'山田'=>['年齢'=>18,'性別'=>'男性','出身'=>'北海道'],
		
		];
		echo $user['田中']['出身'];
		
		

?>


</body>
</html>
