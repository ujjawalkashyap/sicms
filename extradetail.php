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