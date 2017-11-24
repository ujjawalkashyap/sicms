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
		else
			echo'basic details inserted';
		

	
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