<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>PHPの基本</title>
</head>

<body>
<?php
		print'(1)<br>';
		
		$score=90;
		if($score==100){
			print'満点です。';
		}
		elseif($score>=80){
			print'合格です。';
		}
		else{
			print'不合格です。';
		}
		print'<br>';
		
		print'(2)<br>';
		
		$number=rand(1,2);
		$result=($number===1)? '1が出ました。':'2が出ました。';
		print $result.'<br>';
		
		print'(3)<br>';
		
		$number=rand(1,4);
		switch($number){
			case 1:
			 print'1です。';
			 break;
			case 2:
			 print'2です。';
			 break;
			case 3:
		     print'3です。';
			 break;
			case 4:
			 print'4です。';
			 break;
		}
		print'<br>';
		
		print'(4)<br>';
		
		switch($number){
			case 1:
			print'1です。';
			case 2:
			print'2です。';
			case 3:
			print'3です。';
			break;
			case 4:
			print'4です。';
			break;
		}
		print'<br>';
		
		print'(5)<br>';
		
		$number=rand(1,6);
		switch($number){
			case 1:
			print'1です。';
			break;
			case 2:
			print'2です。';
			break;
			case 3:
			print'3です。';
			break;
			case 4:
			print'4です。';
			break;
			default:
			print'エラー';
		}
		print'<br>';
		
		print'(6)<br>';
		
		$number=rand(1,4);
		switch($number):
			case 1:
			print'1です。';
			break;
			case 2:
			print'2です。';
			break;
			case 3:
			print'3です。';
			break;
			case 4:
			print'4です。';
			break;
		endswitch;
		print'<br>';
		
		print'(7)<br>';
		$number=0;
		$counter=0;
		while($number < 10){
			print $number;
			print "(".$counter."回目)";
			$number++;
			$counter++;
			}
		print'<br>';
		
		print'(8)<br>';
		
		$number=0;
		$counter=0;
		do{
			print $number;
			print "(".$counter."回目)";
			$number++;
			$counter++;
		}while($number <= 9);
		print'<br>';
		
		
		print'(9)<br>';
		for($counter=-3;$counter<10;$counter++){
			if($counter===0){
				break;
			}
			echo 100/$counter;
		}
		print'<br>';
		
		print'(10)<br>';
		
		for($counter=-3;$counter<10;$counter++){
			if($counter===0)continue;
			echo 100/$counter;
		}
		print'<br>';
		
		
		
?>


</body>
</html>
