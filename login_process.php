<?php  session_start();
if($_POST){
	$email = trim($_POST['email']);
	$password  = md5(trim($_POST['password']));
	require_once('connect.php');
	$login = mysql_query("select * from bidder where email = '$email' and password ='$password'");
	$count  = mysql_num_rows($login);
	if($count > 0){
		$data = mysql_fetch_assoc($login);
		$_SESSION['id'] = $data['id'];
		$_SESSION['admin_type'] = $data['admin_type'];
		header("location:admin/index.php");
	}
	else{
		echo "<script>alert('Sorry User Name and Password does not exits')</script>";
		echo "<script>location.href='index.php#login'</script>";
	}
}


?>