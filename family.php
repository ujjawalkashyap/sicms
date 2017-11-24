<?php

	if(isset($_POST['submit']))
	{
		include('connect.php');
		$admn     = $_POST['admission_no'];
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
		
		echo $sqlinsert;
		print("<br/>");
		$result= mysqli_query($con,$sqlinsert);
		print("<br/>");
		
			if($result)
			echo 'record inserted';

	}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
	<title> family details </title>
  </head>
     <body>
    
         <h2>family details</h2>
		 <form method="POST" action="family.php">
		 	
		 	<fieldset>
		 	
		 	<div>
				<label>Admission number</label>
				<input name="admission_no" type="int" placeholder="enter your admission number"/>
			</div>
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
			</fieldset>
			<br/>
			<input type="submit" value="Submit" name="submit" />
		</form>
      </body>
</html>