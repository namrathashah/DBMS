<!DOCTYPE html>
<?php  
	$servername = "localhost";
	$username = "root";
	$password = "password";
	$dbname="oneblood";

	$conn = mysqli_connect($servername, $username, $password,$dbname);
	
	$user=$_POST['username'];
	$pass=$_POST['password'];
	if (!$conn) 
	{
	    die("Connection failed: " . mysqli_connect_error());
	}
	else
	{
		$res="Welcome ";
	}
	$sql = "SELECT username,password FROM bloodlogin";
	$result=mysqli_query($conn,$sql);
	
	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_assoc($result))
		{	
			if($user==$row['username'] and $pass==$row['password'])
			{
				$Con=$res.$user." to oneBlood";
				$k=1;
				break;
			}
		}
		if($k==1)
		{
			$value=substr_compare($user,'ajayraj@admin',0);
			$valu=substr_compare($user,'chethan@org',0);
			$val=substr_compare($user,'tilak@user',0);
     		if($value==0)
      		{
        		echo "<script type='text/javascript'>alert('$Con');window.location='../adminmain/index.html';</script>";
      		}
        
			if($valu==0)
			{
				echo "<script type='text/javascript'>alert('$Con');window.location='../organisation/organisationmainpage.html';</script>";
			}
			if($val==0)
			{
				echo "<script type='text/javascript'>alert('$Con');window.location='../usermainpage.html';</script>";
			}
		}
		else
		{
			$Con="Invalid username and password";
			echo "<script type='text/javascript'>alert('$Con');window.location='login.html';</script>";
		}
		
	}
	mysqli_close($conn);
?>
