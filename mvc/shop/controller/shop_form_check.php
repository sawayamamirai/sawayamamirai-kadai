<?PHP
function handle($params)
{
	$view_data=array();
	require_once('./model/common.php');
	
	$post=sanitize($_POST);
	
	$view_data['onamae']=$post['onamae'];
	$view_data['email']=$post['email'];
	$view_data['postal1']=$post['postal1'];
	$view_data['postal2']=$post['postal2'];
	$view_data['address']=$post['address'];
	$view_data['tel']=$post['tel'];
	$view_data['chumon']=$post['chumon'];
	$view_data['pass']=$post['pass'];
	$view_data['pass2']=$post['pass2'];
	$view_data['danjo']=$post['danjo'];
	$view_data['birth']=$post['birth'];
	
	return $view_data;
}
?>