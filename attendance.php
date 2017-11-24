<?php
		
	if(isset($_POST['submit']))
	{
		include('connect.php');
		$admn        = $_POST['admission_no'];
		$sem         = $_POST['sem']; 
		$attend      = $_POST['attend'];
		
		
		$sqlinsert ="INSERT INTO attendance
		(admission_no,sem,attend)
		VALUES ('$admn','$sem','$attend')";
		

		if(!mysqli_query($con,$sqlinsert))
		{die('error inserting new record');}

		echo'1 record added to the database'; 
	}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
	<title> index card </title>
  </head>
     <body>
    
         <h2>student index card</h2>
		 <form method="POST" action="attendance.php">
		 
		 	<fieldset>
		 	<div>
				<label>Admission number</label>
				<input name="admission_no" type="int" placeholder="enter your admission number"/>
			</div>
			<div>
				<label>semester</label>
				<input name="sem" type="int"/>
			</div>
		
			<div>
				<label>Attendance</label>
				<input name="attend" type="float" />
			</div>
			</fieldset>
			<br/>
			<input type="submit" value="Submit" name="submit" />
		</form>    
      </body>
</html>
