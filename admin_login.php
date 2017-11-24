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
<!DOCTYPE html>
<html lang="en">
  <head>
	<title>Admin page</title>
  </head>
     <body>
    
         <h2>Admin login</h2>
		 <form method="POST" action="admin_login.php">
		 	<input type="hidden" name="submitted" value="true"/>
		 	<fieldset>
		 	<div>
				<label>Username</label>
				<input name="user" type="text" placeholder="Username"/>
			</div>
			<div>
				<label>Password</label>
				<input name="pass" type="password" placeholder="Password"/>
			</div>
			</fieldset>
			<br/>
			<input type="submit" value="Submit" name="submit" />
		</form>
<!--<?php
	echo $newrecord;
?> -->       
      </body>
</html>
