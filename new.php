
<!DOCTYPE html>
<html lang="en">
  <head>
	<title> index card </title>
  </head>
     <body>
    
         <h2>student index card query</h2>
		 <form method="POST" action="queryrecord.php">
		 	<fieldset>
		 	<div>
				<label>Admission number</label>
				<input name="admission_no" type="int" placeholder="admission number"/>
			</div>
			</fieldset>
			<br/>
			<input type="submit" value="search" name="submit" />
		</form>      
      </body>
<?php
		
	
	if(isset($_POST['submit']))
	{
		include('connect.php');
		$admn     = $_POST['admission_no'];
		
		
		$sqlinsert ="SELECT * FROM  basic_details
		WHERE admission_no=$admn";
		if(!mysqli_query($con,$sqlinsert))
			die('cant query');
		else 
			echo'query';
		$result=mysqli_query($con,$sqlinsert);
		$res=$result->fetch_assoc();
		
			echo " ".$res['admission_no']." ".$res['first_name']." ".$res['last_name'].$res['cat_rank']." ".$res['year_of_admission']." ".$res['branch']." ".$res['dob']." ".$res['age']." ".$res['sex']." ".$res['email']." ".$res['contact_no']." ".$res['blood_group']." ".$res['religion']." ".$res['caste']." ".$res['date_time']."<br/>";
		
		$sqlinsert ="SELECT * FROM  family_details
		WHERE admission_no=$admn";
		if(!mysqli_query($con,$sqlinsert))
			die('cant query');
		else 
			echo'query';
		$result=mysqli_query($con,$sqlinsert);
		$res=$result->fetch_assoc();

		echo " ".$res['admission_no']." ".$res['f_fname']." ".$res['f_lname']." ".$res['f_occ']." ".$res['f_contact']." ".$res['f_email']." ".$res['m_fname']." ".$res['m_lname']." ".$res['m_occ']." ".$res['m_contact']." ".$res['m_email']."<br/>"; 

		$sqlinsert ="SELECT * FROM  past_record
		WHERE admission_no=$admn";
		if(!mysqli_query($con,$sqlinsert))
			die('cant query');
		else 
			echo'query';
		$result=mysqli_query($con,$sqlinsert);
		
		while($row=$result->fetch_assoc())
		echo " ".$row['admission_no']." ".$row['course']." ".$row['board']." ".$row['percentage_cgpa']." ".$row['year_of_passing']." ".$row['regn']."<br/>";

		$sqlinsert ="SELECT * FROM  result
		WHERE admission_no=$admn";
		if(!mysqli_query($con,$sqlinsert))
			die('cant query');
		else 
			echo'query';
		$result=mysqli_query($con,$sqlinsert);
		
		
		while($row=$result->fetch_assoc())
		echo " ".$row['admission_no']." ".$row['regn_no']." ".$row['sem']." ".$row['subcode']." ".$row['internal']." ".$row['external']." ".$row['total']." ".$row['year_of_exam']."<br/>";

		$sqlinsert ="SELECT * FROM  address
		WHERE admission_no=$admn";
		if(!mysqli_query($con,$sqlinsert))
			die('cant query');
		else 
			echo'query';
		
		$res=$result->fetch_assoc();
		echo $res['paddress'];
		echo " ".$res['admission_no']." ".$res['paddress']." ".$res['paddress_city']." ".$res['paddress_state']." ".$res['pa_zip']." ".$res['laddress']." ".$res['laddress_city']." ".$res['laddress_state']." ".$res['la_zip'];

	}

?>
</html>
