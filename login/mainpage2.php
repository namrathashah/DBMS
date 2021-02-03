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

$user_name=$_POST['username'];
$user_pass=$_POST['password'];
$mysql_qry="select name,ssid from admin_login";
$result=mysqli_query($conn,$mysql_qry);
if(mysqli_num_rows($result) > 0)
{
	//echo "login success";
	while($row=mysqli_fetch_assoc($result))
		{	
			if($user_name==$row['name'] and $user_pass==$row['ssid'])
			{
				$Con=$res.$user_name." to Sumukha Electronics";
				$k=1;
				break;
			}
		}
		if($k==1)
		{
			echo "<script type='text/javascript'>alert('$Con');</script>";
			/*$value=substr_compare($user,'ajayraj@admin',0);
			//$valu=substr_compare($user,'chethan@org',0);
			//$val=substr_compare($user,'tilak@user',0);
     		if($value==0)
      		{
        		echo "<script type='text/javascript'>alert('$Con');window.location='../front.html';</script>";
      		}
        
			if($valu==0)
			{
				//echo "<script type='text/javascript'>alert('$Con');window.location='../front.html';</script>";
			}
			if($val==0)
			{
				//echo "<script type='text/javascript'>alert('$Con');window.location='../usermainpage.html';</script>";
			}*/
		}
		else
		{
			$Con="Invalid username and password";
			echo "<script type='text/javascript'>alert('$Con');window.location='login.html';</script>";
		}
		
}
mysqli_close($conn);
?>