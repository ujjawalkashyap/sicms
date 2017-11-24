<?php
	error_reporting(E_ALL);
ini_set("display_errors", 1);
	if(isset($_POST['submitted']))
	{
		include('connect.php');
		$name     = $_POST['name'];
		$user     = $_POST['user'];
		$pass     = $_POST['pass'];


		function validate_password($pass) 
		{
   			$uppercase = '/[A-Z]/';
   			$lowercase = '/[a-z]/';
  		 	$special_chars = '/[!@#$%^&*()\-_=+{};:,<.>]/';
  			$numerics = '/[0-9]/';

   			// Check if it has uppercase letters.
   			if (preg_match_all($uppercase, $pass, $matches) < 1) return false;


   			// Check if it has lowercase letters.
   			if(preg_match_all($lowercase, $pass, $matches) < 1) return false;

   			// Check if it has special characters.
		   if(preg_match_all($special_chars, $pass, $matches) < 1) return false;

			// Check if it has numeric characters.
		   if(preg_match_all($numerics, $pass, $matches) < 1) return false;

			// Check if it has atleast 8 characters.
   			if(strlen($pass) < 8) return false;

	   		return true;
		}
		
		$sqlinsert ="INSERT INTO admin_login 
		(userid,name,admin_password)
		VALUES ('$user','$name','$pass')"; 

		if (!empty($user))
    	{
        	 if (preg_match("/[^A-Za-z]/", $user)) 
        	 {
            	print ("<p >Invalid username. Username should be alpha<br/></p>");
         	 }
        }
      	 else 
        {
         	print ("<p>Username should not be empty!<br/></p>");
        }
        if (!empty($_POST["pass"]))
        {
			$status = validate_password($_POST["pass"]);
			if (!$status)
				{
					print ("<p >Invalid password. Password should include atleast one upppercase, one lowercase, one numeric, one special character and alteast 8 characters<br/></p>");
				}
			else
			{
				 if (!empty($_POST["confirm_password"]))
        		{
        			$status = validate_password($_POST["confirm_password"]);
        			if($status)
            		{
            			if ($_POST["pass"] != $_POST['confirm_password'])
            		    print ("<p>Passwords are not matching");
            		    else
            		    {
            		     	if(!mysqli_query($con,$sqlinsert))
        					{die('error inserting new record');}
        					print("<p>hey <strong>$name</strong><br/></p>");
     						$newrecord='Your account has been successfully created';    
            		    }
            		}
            		else
            		{
            			print ("<p >Invalid confirm password. Password should include atleast one upppercase, one lowercase, one numeric, one special character and alteast 8 characters<br/></p>");
            		}
        		} 
        		else 
        		{
        	 		print ("<p>Confirm Password should not be empty!<br/></p>");
        		}
			}
		}
		else 
       	{
  	 		print ("<p> Password should not be empty!<br/></p>");    		
  	 	}

	}


?>
<!DOCTYPE html>
<html lang="en">
  <head>
	<title>Admin page</title>
	<style>
		.error{color:red;}
	</style>
  </head>
     <body>
    
         <h2>Admin Signup </h2>
		 <form method="POST" action="admin_signup.php">
		 	<input type="hidden" name="submitted" value="true"/>
		 	<fieldset>
		 	<div>
				<label>Name</label>
				<input name="name" type="text" placeholder="Name">
			</div>
		 	<div>
				<label>Username</label>
				<input name="user" type="text" placeholder="Username"/>
			</div>
			<div>
				<label>Password</label>
				<input name="pass" type="password" placeholder="Password"/>
			</div>
			<div>
				<label>confirm password</label>
				<input name="confirm_password" type="password" placeholder="confirm password"/>
			</div>
			</fieldset>
			<br/>
			<input type="submit" value="Submit" name="submit" />
		</form>
<?php
	echo $newrecord;
?>       
      </body>
</html>
