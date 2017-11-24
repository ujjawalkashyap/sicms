<?php
		
	if(isset($_POST['submit']))
	{
		include('connect.php');
		$admn     = $_POST['admission_no'];
		$cat      = $_POST['cat_rank'];
		$fname    =	$_POST['first_name'];
		$lname    =	$_POST['last_name']; 
		$yoa      =	$_POST['year_of_admission'];
		$branch   =	$_POST['task_option'];
		$dob      = $_POST['dob'];
		$age      = $_POST['age'];
		$sex      = $_POST['sex'];
		$email    = $_POST['email']; 
		$contact  = $_POST['contact_no'];
		$blood    = $_POST['blood_group'];
		$religion = $_POST['religion'];
		$caste    = $_POST['caste'];
		
		
		$sqlinsert ="INSERT INTO basic_details 
		(admission_no,cat_rank,first_name,last_name,year_of_admission,branch,dob,age,sex,email,contact_no,blood_group,religion,caste)
		VALUES ('$admn','$cat','$fname','$lname','$yoa','$branch','$dob','$age','$sex','$email','$contact','$blood',   '$religion','$caste')";
		

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
		 <form method="POST" action="student_details.php">
		 
		 	<fieldset>
		 	<div>
				<label>Admission number</label>
				<input name="admission_no" type="int" placeholder="enter your admission number"/>
			</div>
			<div>
				<label>cat rank</label>
				<input name="cat_rank" type="int" placeholder="enter your cat rank"/>
			</div>
			<div>
				<label>First Name</label>
				<input name="first_name" type="text" placeholder="Enter First Name"/>
			</div>
			<div>
				<label>Last Name</label>
				<input name="last_name" type="text" placeholder="Enter Last Name"/>
			</div>
			<div >
				<label>Email address</label>
				<input name="email" type="email" placeholder="Enter Email"/>
			</div>
			<div >
				<label>Year of Admission</label>
				<input name="year_of_admission" type="int" placeholder="admission year"/>
			</div>
			<div>
			<div >
			<label>branch</label>
				<select name="task_option">
    			<option value="CS">CS</option>
    			<option value="IT">IT</option>
    			<option value="ECE">ECE</option>
    			<option value="ME">ME</option>
 				<option value="CE">CE</option>
 				<option value="EEE">EEE</option>
 				<option value="SE">SE</option>
 				 </select>
 			</div>
			<div>
				<label>dob</label>
				<input name="dob" type="date" placeholder="dob"/>
			</div>
			<div>
				<label>age</label>
				<input name="age" type="int" placeholder="age"/>
			</div>
			<div >
				<label>Sex</label>
				<input name="sex" type="text" placeholder="'M'or'F'"/>
			</div>
			<div>
				<label>Contact Number</label>
				<input name="contact_no" type="int" placeholder="----------"/>
			</div>
			<div>
				<label>Blood Group</label>
				<input name="blood_group" type="text"  placeholder="eg. AB+"/>
			</div>
			<div>
				<label>Religion</label>
				<input name="religion" type="text" />
			</div>
			<div >
				<label>Caste</label>
				<input name="caste" type="text" />
			</div>
		
			</fieldset>
			<br/>
			<input type="submit" value="Submit" name="submit" />
		</form>    
      </body>
</html>
