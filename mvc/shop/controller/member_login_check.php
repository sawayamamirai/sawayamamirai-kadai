<?php
function handle($params) {
	try {
		
		require_once('./model/common.php');
		
		$post=sanitize($_POST);
		$member_email=$post['email'];
		$member_pass=$post['pass'];
		$member_pass=md5($member_pass);
		
		$sql='SELECT code,name FROM dat_member WHERE email=? AND password=?';
		$data[]=$member_email;
		$data[]=$member_pass;
		$stmt=executeSql($sql,$data);
		
		$dbh=null;
		$rec=$stmt->fetch(PDO::FETCH_ASSOC);
		
		if($rec==false) {
			print'メールアドレスかパスワードが間違っています。<br />';
			print'<a href="member_login">戻る</a>';
		} else {
			session_start();
			$_SESSION['member_login']=1;
			$_SESSION['member_code']=$rec['code'];
			$_SESSION['member_name']=$rec['name'];
			header('Location: ./shop_list');
			exit();
		}
		
	} catch(Exception $e) {
		displayError();
	}
	
	$view_data=array();
	return $view_data;
}

?>












