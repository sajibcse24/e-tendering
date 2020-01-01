<?php session_start();
require_once('../connect.php');


$tender_title = trim($_POST['tender_title']);
$short_description = trim($_POST['short_description']);
$tender_type = trim($_POST['tender_type']);
$end_date = trim($_POST['end_date']);
$open_date = trim($_POST['open_date']);
$earnest_money = trim($_POST['earnest_money']);

$temp = explode(".", $_FILES["download_file"]["name"]);
$newfilename = round(microtime(true)) . '.' . end($temp);
move_uploaded_file($_FILES["download_file"]["tmp_name"], "tender_file/" . $newfilename);
$bidder_id = $_SESSION['id'];
$create_date = date("Y-m-d");
$sql = mysql_query("INSERT INTO tender values('','$bidder_id','0','$tender_title','$short_description','$newfilename','$tender_type','$end_date','$open_date','$earnest_money','$create_date','1')");


if($sql){
	echo "<script>alert('Registration Successful. You can login now. Than you')</script>";
	header("location:index.php");
}
else{
	echo mysql_error();
}

?>


