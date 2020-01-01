<?php 

$connect = mysql_connect("localhost","root","");
if($connect){
	$db = mysql_select_db("etender");
	if(!$db){
		exit("Error database selection ");
	}
}

?>