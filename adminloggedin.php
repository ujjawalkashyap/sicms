<? php
$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
        echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
    }
} 
else 
{
    echo "0 results";
}
?>
<html>
<head>
<title>admin page
</title>
</head>
<body>
<a class="btn btn-default" href="#" role="button">Link</a>
<button class="btn btn-default" type="submit">Button</button>
<input class="btn btn-default" type="button" value="Input">
<input class="btn btn-default" type="submit" value="Submit">
</body>
</html>
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
				<input name="view" type="button" />
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