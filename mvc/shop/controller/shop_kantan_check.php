<?PHP
session_start();
function handle($params) {
	require_once('./model/common.php');
	session_regenerate_id(true);
	
	$code=$_SESSION['member_login'];
    $sql='SELECT name,email,postal1,postal2,address,tel FROM dat_member WHERE code=?';
    $data[]=$code;
    $stmt=executeSql($sql,$data);
    $rec=$stmt->fetch(PDO::FETCH_ASSOC);
    $dbh=null;
    
	$view_data=array();
	$view_data['onamae']=$rec['name'];
	$view_data['email']=$rec['email'];
	$view_data['postal1']=$rec['postal1'];
	$view_data['postal2']=$rec['postal2'];
	$view_data['address']=$rec['address'];
	$view_data['tel']=$rec['tel'];
	
	return $view_data;
}
?>
