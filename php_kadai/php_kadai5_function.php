<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>PHPの基本</title>
</head>

<body>
<?php
		print'関数課題１<br><br>';
		
		print'足し算<br>';
		function add($num1,$num2){
			$num1=$num1+$num2;
			return $num1;
		}
		$ans=add(6,3);
		print $ans;
		print'<br>';
		
		print'引き算<br>';
		function sub($num1,$num2){
			$num1=$num1-$num2;
			return $num1;
		}
		$ans=sub(6,3);
		print $ans;
		print'<br>';
		
		print'掛け算<br>';
		function mul($num1,$num2){
			$num1=$num1*$num2;
			return $num1;
		}
		$ans=mul(6,3);
		print $ans;
		print'<br>';
		
		print'割り算<br>';
		function div($num1,$num2){
			$num1=$num1/$num2;
			return $num1;
		}
		$ans=div(6,3);
		print $ans;
		print'<br>';
		
		print'剰余<br>';
		function sur($num1,$num2){
			$num1=$num1%$num2;
			return $num1;
		}
		$ans=sur(6,3);
		print $ans;
		print'<br><br>';
		
		
		//関数課題２
		print'関数課題２<br>';
		
		print'足し算<br>';
		function add2(&$num1,&$num2)
		{
			$num1=$num1+$num2;
			return $num1;
		}
		$a=2;
		$b=3;
		add2($a,$b);
		echo $a.'<br>';
		echo $b.'<br>';
		
		print'引き算<br>';
		function sub2(&$num1,&$num2){
			$num1=$num1-$num2;
			return $num1;
		}
		$a=2;
		$b=3;
		sub2($a,$b);
		echo $a.'<br>';
		echo $b.'<br>';
		
		
		print'掛け算<br>';
		function mul2(&$num1,&$num2){
			$num1=$num1*$num2;
			return $num1;
		}
		$a=2;
		$b=3;
		mul2($a,$b);
		echo $a.'<br>';
		echo $b.'<br>';
		
		print'割り算<br>';
		function div2(&$num1,&$num2){
			$num1=$num1/$num2;
			return $num1;
		}
		$a=8;
		$b=4;
		div2($a,$b);
		echo $a.'<br>';
		echo $b.'<br>';
		
		
		print'剰余<br>';
		function sur2(&$num1,&$num2){
			$num1=$num1%$num2;
			return $num1;
		}
		$a=7;
		$b=3;
		sur2($a,$b);
		echo $a.'<br>';
		echo $b.'<br>';
		
		

?>


</body>
</html>
