<?php
session_start();
function handle($params) {
		try {
			require_once('./model/common.php');
	        require_once('./model/mail_class.php');
	        session_regenerate_id(true);
	        
			$post=sanitize($_POST);
			$onamae=$post['name'];
			$email=$post['email'];
			$postal1=$post['postal1'];
			$postal2=$post['postal2'];
			$address=$post['address'];
			$tel=$post['tel'];
			
	        
	        require_once('./model/mail_class.php');
			
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
			
			$lastmembercode=$_SESSION['member_code'];
			
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
			
			for($i=0;$i<$max;$i++)
			{
				$sql='INSERT INTO dat_sales_product(code_sales,code_product,price,quantity)VALUES(?,?,?,?)';
				
				$data=array();
				$data[]=$lastcode;
				$data[]=$cart[$i];
				$data[]=$kakaku[$i];
				$data[]=$kazu[$i];
				
				$stmt=executeSql($sql,$data);
			}
			
			
			$title='<br />ご注文ありがとうございます。<br /><br />';
			$header='From:info@rokumarunouen.co.jp';
			$Rokumaru_Mail=new Rokumaru_Mail($header);
			$Rokumaru_Mail->makeMail($title,$onamae,$mailData);
			$Rokumaru_Mail->sendMail($email);
			
			
			$title='お客様からご注文がありました。';
			$header='From:'.$email;
			$Rokumaru_Mail=new Rokumaru_Mail($header);
			$Rokumaru_Mail->makeMail($title,$onamae,$mailData);
			$Rokumaru_Mail->sendMail($email);
		}
		catch(Exception $e)
		{
			displayError();
		}
	
	$view_data=array();
	$view_data['onamae']=$onamae;
	$view_data['email']=$email;
	$view_data['postal1']=$postal1;
	$view_data['postal2']=$postal2;
	$view_data['address']=$address;
	$view_data['tel']=$tel;
	
	return $view_data;
}
?>
