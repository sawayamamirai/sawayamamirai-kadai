<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>PHPの基本</title>
</head>

<body>
<?php
		
		print'(1)<br>';
		$i=2+4-5;
		print $i.'<br>';
		
		$i=4-5+2;
		print $i.'<br>';
		
		$i=4*5/2;
		print $i.'<br>';
		
		$i=5/2*4;
		print $i.'<br>';
		print'<br>';
		
		print'(2)<br>';
		$i=2*3+4+1;
		print $i.'<br>';
		
		$i=2*(3+4+1);
		print $i.'<br>';
		print'<br>';
		
		print'(3)<br>';
		$username="Adm";
		if($username=="Admin")
		{
			echo("変数usernameがAdminの時です。<br>");
		}
		else
		{
			echo("変数usernameの値をAdmin以外の値にするとfalseが実行されます。<br>");
		}
		print'<br>';
		
		print'(4)<br>';
		$fruits=['apple','orange','banana'];
		foreach($fruits as $value){
			print $value.'<br>';
		}
		print'<br>';
		
		print'(5)<br>';
		$fruits=['apple','orange','banana'];
		sort($fruits);
		var_dump($fruits);
		print'<br><br>';
		
		print'(6)<br>';
		$maker=['富士通','NEC','Sony'];
		$type=['Note','Desktop'];
		$pc=[$maker,$type];
		foreach($pc as $value){
			var_dump($value).'<br>';
		}
		print'<br><br>';
		
		$count=count($pc);
		$i=0;
		while($i<$count){
			var_dump($pc[$i]).'<br>';
			++$i;
		}
		
?>


</body>
</html>
