<?php require_once('connect.php');
if($_POST){
	$email = trim($_POST['email']);
	$password = trim($_POST['password']);
	$name = trim($_POST['name']);
	$postal_address = trim($_POST['postal_address']);
	$postal_email = trim($_POST['postal_email']);
	$phone = trim($_POST['phone']);
	$fax = trim($_POST['fax']);
	$tin = trim($_POST['tin']);
	$trade_license = trim($_POST['trade_license']);
	$vat = trim($_POST['vat']);
	$person_name = trim($_POST['person_name']);
	$designation = trim($_POST['designation']);
	$mobile_number = trim($_POST['mobile_number']);
	$date = date("y-m-d");

$temp = explode(".", $_FILES["trade_license_file"]["name"]);
$newfilename = round(microtime(true)) . '.' . end($temp);
move_uploaded_file($_FILES["trade_license_file"]["tmp_name"], "img/upload_file/" . $newfilename);

$temp1 = explode(".", $_FILES["vat_certificate_file"]["name"]);
$newfilename1 = round(microtime(true)) . '.' . end($temp1);
move_uploaded_file($_FILES["vat_certificate_file"]["tmp_name"], "img/upload_file/" . $newfilename1);


$temp2 = explode(".", $_FILES["tin_certificate_file"]["name"]);
$newfilename2 = round(microtime(true)) . '.' . end($temp2);
move_uploaded_file($_FILES["tin_certificate_file"]["tmp_name"], "img/upload_file/" . $newfilename2);

$enc_pass =md5($password);
$sql = mysql_query("insert into bidder values('','',$email','$enc_pass', '$password' ,'$name','$postal_address','$phone','$fax','$tin','$trade_license','$vat','','$newfilename','$newfilename1','$newfilename2','$person_name','$designation','$mobile_number','$date','0')");

if($sql){
	echo "<script>alert('Registration Successful. You can login now. Than you')</script>";
	header("location:index.php");
}
}