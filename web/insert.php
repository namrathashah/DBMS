<?php

$db_name="sumukha_electronics";
$mysql_username="root";
$mysql_password="";
$server_name="127.0.0.1";
$k=0;
$conn = mysqli_connect($server_name,$mysql_username,$mysql_password,$db_name);
if ($conn) {
	$res="Welcome  ";
	//echo "connection success";
}
else{
	 die("Connection failed: " . mysqli_connect_error());
}
$dom = new DOMDocument();
$dom->loadHTMLfile('http://localhost/DBMS/web/service.html');
$date_val=$dom->getElementById('datepicker');
$name=$_POST['Name'];
$ph_num=$_POST['Phone_no'];
$email=$_POST['email'];
$date=$_POST[$date_val];
$slot$_POST['slot'];
$