<?php session_start();
if(isset($_GET)){


$id = $_GET['id'];
require_once('../connect.php');

$sql= mysql_query("UPDATE tender set admin_approve=1 where id =$id");
if($sql){
	echo "<script>alert('Registration Successful. You can login now. Than you')</script>";
	header("location:request_tender.php");
}
}
else{
	header('location:request_tender.php');
}

?>