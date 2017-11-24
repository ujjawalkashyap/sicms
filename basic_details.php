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
		

	
		$f_fname   = $_POST['f_fname'];
		$f_lname   = $_POST['f_lname'];
		$f_contact =$_POST['f_contact'];
		$f_occ     =$_POST['f_occ'];
		$f_email   =$_POST['f_email'];
		$m_fname   =$_POST['m_fname'];
		$m_lname   = $_POST['m_lname'];
		$m_contact =$_POST['m_contact'];
		$m_occ     =$_POST['m_occ'];
		$m_email   =$_POST['m_email'];
		$sqlinsert="INSERT INTO family_details
		(admission_no,f_fname,f_lname,f_occ,f_contact,f_email,m_fname,m_lname,m_occ,m_contact,m_email)
		VALUES ('$admn','$f_fname','$f_lname','$f_occ','$f_contact','$f_email','$m_fname','$m_lname','$m_occ','$m_contact','$m_email')";
		
		if(!mysqli_query($con,$sqlinsert))
		{die('error inserting new record 2');}
		else
			echo ' family details inserted ';

		$course    =$_POST['course'];
		$board	   =$_POST['board'];
		$ptg_cgpa  =$_POST['percentage_cgpa'];
		$yop       =$_POST['year_of_passing'];
		$regn      =$_POST['regn_no'];
		$course2    =$_POST['course2'];
		$board2	   =$_POST['board2'];
		$ptg_cgpa2  =$_POST['percentage_cgpa2'];
		$yop2       =$_POST['year_of_passing2'];
		$regn2      =$_POST['regn_no2'];
		$sqlinsert ="INSERT INTO past_record(admission_no,course,board,percentage_cgpa,year_of_passing,regn)
		VALUES ('$admn','$course','$board','$ptg_cgpa','$yop','$regn')";
		
		if(!mysqli_query($con,$sqlinsert))
		{die('error inserting new record 3');}
		else
			echo'class 10 record inserted ';

		$sqlinsert ="INSERT INTO past_record(admission_no,course,board,percentage_cgpa,year_of_passing,regn)
		VALUES ('$admn','$course2','$board2','$ptg_cgpa2','$yop2','$regn2')";
		
		if(!mysqli_query($con,$sqlinsert))
		{die('error inserting new record 4');}
		else
			echo' class 12 record inserted ';
		
	
		$paddress       =$_POST['paddress'];
		$paddress_city  =$_POST['paddress_city'];
		$paddress_state =$_POST['paddress_state'];
		$pa_zip	        =$_POST['pa_zip'];
		$laddress       =$_POST['laddress'];
		$laddress_city  =$_POST['laddress_city'];
		$laddress_state =$_POST['laddress_state'];
		$la_zip	        =$_POST['la_zip'];

		$sqlinsert ="INSERT INTO address(admission_no,paddress,paddress_city,paddress_state,pa_zip,laddress,laddress_city,laddress_state,la_zip)
		VALUES ('$admn','$paddress','$paddress_city','$paddress_state','$pa_zip','$laddress','$laddress_city','$laddress_state','$la_zip')";
		
		if(!mysqli_query($con,$sqlinsert))
		{die('error inserting new record4');}
		else 
			echo 'address details inserted ';
		
	}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
	<title> index card </title>
  </head>
     <body>
    
         <h2>student index card</h2>
		 <form method="POST" action="basic_details.php">
		 	
		 	<fieldset>
		 	
		 	<div>
				<label>Admission number</label>
				<input name="admission_no" type="int" placeholder="enter your admission number"/>
			</div>
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
			<p>Father's details<br/></p> 
			<div >
				<label>father's first name</label>
				<input name="f_fname" type="text" />
			</div>
			<div >
				<label>father's last name</label>
				<input name="f_lname" type="text" />
			</div>
			<div >
				<label>father's occupation</label>
				<input name="f_occ" type="text" />
			</div>
			<div >
				<label>father's contact number</label>
				<input name="f_contact" type="text" />
			</div>
			<div >
				<label>father's email id</label>
				<input name="f_email" type="email" />
			</div>
			<p>Mother's details<br/></p>
			<div >
				<label>mother's first name</label>
				<input name="m_fname" type="text" />
			</div>
			<div >
				<label>mother's last name</label>
				<input name="m_lname" type="text" />
			</div>
			<div >
				<label>mother's occupation</label>
				<input name="m_occ" type="text" />
			</div>
			<div >
				<label>mother's contact number</label>
				<input name="m_contact" type="text" />
			</div>
			<div >
				<label>mother's email-id</label>
				<input name="m_email" type="email" />
			</div>
			
			<p>course 1<br/></p>
			<div>
			<label>course </label>
				<select name="course">
    			<option value="AISSE" selected>AISSE</option>
    			<option value="AISSCE">AISSCE</option>
    			<option value="OTHERS">others </option>
    			</select>
 			</div>
			<div >
				<label>board</label>
				<input name="board" type="text" />
			</div>
			<div >
				<label>percentage or cgpa</label>
				<input name="percentage_cgpa" type="text" />
			</div>
			<div >
				<label>year of passing</label>
				<input name="year_of_passing" type="date" />
			</div>
			<div >
				<label>registration number</label>
				<input name="regn_no" type="text" />
			</div>
			</div>
			<p>Course 2<br/></p>
			<label>course </label>
				<select name="course2">
    			<option value="AISSE">AISSE</option>
    			<option value="AISSCE" selected>AISSCE</option>
    			<option value="OTHERS">others </option>
    			</select>
 			</div>
			<div >
				<label>board</label>
				<input name="board2" type="text" />
			</div>
			<div >
				<label>percentage or cgpa</label>
				<input name="percentage_cgpa2" type="text" />
			</div>
			<div >
				<label>year of passing</label>
				<input name="year_of_passing2" type="date" />
			</div>
			<div >
				<label>registration number</label>
				<input name="regn_no2" type="text" />
			</div>
			
			<p>Permanent address<br/></p>
			<div >
				<label>street</label>
				<input name="paddress" type="text" />
			</div>
			<div >
				<label>city</label>
				<input name="paddress_city" type="text" />
			</div>
			<div >
				<label>state</label>
				<input name="paddress_state" type="text" />
			</div>
			<div >
				<label>zip-code</label>
				<input name="pa_zip" type="text" />
			</div>
			<p>Local address</p>
			<div >
				<label>street</label>
				<input name="laddress" type="text" />
			</div>
			<div >
				<label>city</label>
				<input name="laddress_city" type="text" />
			</div>
			<div >
				<label>State</label>
				<input name="laddress_state" type="text" />
			</div>
			<div >
				<label>zip-code</label>
				<input name="la_zip" type="text" />
			</div>	
			</fieldset>
			<br/>
			<input type="submit" value="Submit" name="submit" />
		</form>

      </body>
</html>
