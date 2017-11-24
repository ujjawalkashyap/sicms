<?php
	error_reporting(E_ALL);
ini_set("display_errors", 1);
	if(isset($_POST['submitted']))
	{
		include('connect.php');
		$user     = $_POST['user'];
		$pass     = $_POST['pass'];
		$query="SELECT admin_password FROM admin_login WHERE userid='$user'";
		$result=mysqli_query($con,$query);
		if($result->num_rows==0)
        {
        	die('unable to connect');	
        }
        else
        {
        	echo $query;
        	$res=$result->fetch_assoc();
        	echo $res['admin_password'];
        	if($res['admin_password']==$pass)
			{
				print("<p> logged in</p><br/>");
				header('Location:adminloggedin.php');
			}
			else
			print("<p> username and password does not match</p><br/>");
        }
	}
?>