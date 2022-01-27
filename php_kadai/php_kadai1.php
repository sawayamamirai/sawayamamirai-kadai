<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>PHPの基本</title>
</head>

<body>
<?php 
		
		print'(1)<br>';
		$red="赤";
		$blue="青";
		
		if(strcasecmp($red,$blue)==0){
			print'同じ文字列です。<br>';
		}
		else
		{
			print'違う文字列です。<br>';
		}
		
		print'(2)<br>';
		$a='赤';
		$b='青';
		print $a.$b;
		print'<br>';
		
		print'(3)<br>';
		$num=20;
		print $num."歳です。";
		print'<br>';
		
		print'(4)<br>';
		define("Moji1","Hello");
		print Moji1;
		
		const Moji2="World";
		print Moji2;
		print'<br>';
		
		print'(5)<br>';
		print $_SERVER['PHP_SELF'];
		print'<br>';
		print __LINE__;
		print'<br>';
		
		print'(6)<br>';
		$i=300;
		print $i/365;
		print'<br>';
		
		print'(7)<br>';
		$i=5;
		print $i++.'<br>';
		print $i.'<br>';
		
		print'(8)<br>';
		$i=10;
		print $i--.'<br>';
		print $i.'<br>';
		
		print'(9)<br>';
		$i=15;
		print $i++.'<br>';
		print $i.'<br>';
		$i=20;
		print ++$i.'<br>';
		
		print'(10)<br>';
		$a=3;
		$b=2;
		print $a+$b.'<br>';
		
		print'(11)<br>';
		$i=1234;
		$str=strval($i);
		var_dump($i);
		print'<br>';
		
		print'(12)<br>';
		$locations=3;
		$c=$locations+2;
		print $c.'<br>';
		
		
?>


</body>
</html>
