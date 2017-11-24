<?php

	if(isset($_POST['submit']))
	{
		include('connect.php');
		$admn     = $_POST['admission_no'];
		$cocur   = $_POST['co_curricular'];
		$disc   = $_POST['disciplinary'];
		$cgpa =$_POST['cgpa'];
		$project     =$_POST['project'];
		$guide   =$_POST['guide_name'];
		$gate   =$_POST['gate_score'];
		
		$sqlinsert="INSERT INTO extra_details
		(admission_no,co_curricular,disciplinary,cgpa,project,guide_name,gate_score)
		VALUES ('$admn','$cocur','$disc','$cgpa','$project','$guide','$gate')";
		
		if(mysqli_query($con,$sqlinsert))
		echo 'record inserted';
		else
		die('error inserting record');
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
	<title> extra details </title>
  </head>
     <body>
    
         <h2>extra</h2>
		 <form method="POST" action="extra.php">
		 	<fieldset>
		 	<div>
				<label>Admission number</label>
				<input name="admission_no" type="int" placeholder="admission number"/>
			</div>
			<div >
				<label>co curricular</label>
				<input name="co_curricular" type="text" />
			</div>
			<div >
				<label>disciplinary</label>
				<input name="disciplinary" type="text" />
			</div>
			<div >
				<label>cgpa</label>
				<input name="cgpa" type="float" />
			</div>
			<div >
				<label>project</label>
				<input name="project" type="text" />
			</div>
			<div >
				<label>guide name</label>
				<input name="guide_name" type="text" />
			</div>
			<div >
				<label>gate score</label>
				<input name="gate_score" type="int" />
			</div>
			</fieldset>
			<br/>
			<input type="submit" value="Submit" name="submit"/>
		</form>
      </body>
</html>