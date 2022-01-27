<?php
session_start();
function handle($params) {
	$view_data=array();
	session_regenerate_id(true);
	try {
		require_once('model/common.php');
		require_once('model/mail_class.php');
		
		$post=sanitize($_POST);
		
		$onamae=$post['onamae'];
		$email=$post['email'];
		$postal1=$post['postal1'];
		$postal2=$post['postal2'];
		$address=$post['address'];
		$tel=$post['tel'];
		$chumon=$post['chumon'];
		$pass=$post['pass'];
		$danjo=$post['danjo'];
		$birth=$post['birth'];
		
		$cart=$_SESSION['cart'];
		$kazu=$_SESSION['kazu'];
		$max=count($cart);
		
		for($i=0;$i<$max;$i++) {
			$sql='SELECT name,price FROM mst_product WHERE code=?';
			$data[0]=$cart[$i];
			$stmt=executeSql($sql,$data);
			
			$rec=$stmt->fetch(PDO::FETCH_ASSOC);
			$name=$rec['name'];
			$price=$rec['price'];
			$kakaku[]=$price;
			$suryo=$kazu[$i];
			$shokei=$price*$suryo;
			
			$mailData[]=[$name,$price,$suryo,$shokei];
		}
		
		$stmt=executeSql($sql,$data);
		
		$lastmembercode=0;
		if($chumon=='chumontouroku') {
			$sql='INSERT INTO dat_member(password,name,email,postal1,postal2,address,tel,danjo,born)VALUES(?,?,?,?,?,?,?,?,?)';
			$data=array();
			$data[]=md5($pass);
			$data[]=$onamae;
			$data[]=$email;
			$data[]=$postal1;
			$data[]=$postal2;
			$data[]=$address;
			$data[]=$tel;
			if($danjo=='dan') {
				$data[]=1;
			} else {
				$data[]=2;
			}
			$data[]=$birth;
			
			$stmt=executeSql($sql,$data);
			
			$sql='SELECT LAST_INSERT_ID()';
			$stmt=executeSql($sql,$data);
			$rec=$stmt->fetch(PDO::FETCH_ASSOC);
			$lastmembercode=$rec['LAST_INSERT_ID()'];
		}
		
		$sql='INSERT INTO dat_sales(code_member,name,email,postal1,postal2,address,tel)VALUES(?,?,?,?,?,?,?)';
		$data=array();
		$data[]=$lastmembercode;
		$data[]=$onamae;
		$data[]=$email;
		$data[]=$postal1;
		$data[]=$postal2;
		$data[]=$address;
		$data[]=$tel;
		
		$stmt=executeSql($sql,$data);
		
		$sql='SELECT LAST_INSERT_ID()';
		$stmt=executeSql($sql);
		$rec=$stmt->fetch(PDO::FETCH_ASSOC);
		$lastcode=$rec['LAST_INSERT_ID()'];
		
		for($i=0;$i<$max;$i++) {
			$sql='INSERT INTO dat_sales_product(code_sales,code_product,price,quantity)VALUES(?,?,?,?)';
			$data=array();
			$data[]=$lastcode;
			$data[]=$cart[$i];
			$data[]=$kakaku[$i];
			$data[]=$kazu[$i];
			$stmt=executeSql($sql,$data);
		}
		
		
		//print'<br />';
		//print nl2br($honbun);
		
		$title='ご注文ありがとうございます<br /><br />';
		$header='From:info@rokumarunouen.co.jp';
		$Rokumaru_Mail=new Rokumaru_Mail($header);
		$Rokumaru_Mail->makeMail($title,$onamae,$mailData,$chumon);
		$Rokumaru_Mail->sendMail($email);
		
		$title='お客様からご注文がありました。';
		$header='From:'.$email;
		$Rokumaru_Mail=new Rokumaru_Mail($header);
		$Rokumaru_Mail->makeMail($title,$onamae,$mailData,$chumon);
		$Rokumaru_Mail->sendMail($email);
		
	} catch(Exception $e) {
		displayError();
	}
	
	$view_data['onamae']=$onamae;
	$view_data['email']=$email;
	$view_data['postal1']=$postal1;
	$view_data['postal2']=$postal2;
	$view_data['address']=$address;
	$view_data['tel']=$tel;
	$view_data['chumon']=$chumon;
	
	return $view_data;
}

?>
