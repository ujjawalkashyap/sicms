<?php
	if(isset($_POST['submit']))
	{
		include('connect.php');
		$admn     = $_POST['admission_no'];
		$regn  = $_POST['regn_no'];
		$sem   = $_POST['sem'];
		$year_of_exam  =$_POST['yoe'];

		$subcode =$_POST['subcode'];
		$internal   =$_POST['internal'];
		$external   =$_POST['external'];
		$total=$internal+$external;
		$grade;
		$res;
		
		function gradegpa($mark,$external)
		{
			if($external<27||$marks<50)
			{
				$grade='F';
				$res="fail";
			}
			else if($mark>=90)
			{
				$grade='S';
				$gpa="Pass";
			}
			else if($mark>=85)
			{
				$grade='A+';
				$gpa="Pass";
			}
			else if($mark>=80)
			{
				$grade='A';
				$gpa="Pass";
			}
			else if($mark>=75)
			{
				$grade='B+';
				$gpa="Pass";
			}
			else if($mark>=70)
			{
				$grade='B';
				$gpa="Pass";
			}
			else if($mark>=65)
			{
				$grade='C+';
				$gpa="Pass";
			}
			else if($mark>=60)
			{
				$grade='C';
				$gpa="Pass";
			}
			else if($mark>=55)
			{
				$grade='D+';
				$gpa="Pass";
			}
			else if($mark>=50)
			{
				$grade='D';
				$gpa="Pass";
			}
		}
		gradegpa($mark,$internal);
		echo $sqlinsert;
		$sqlinsert="INSERT INTO result
		(admission_no,regn_no,sem,subcode,internal,external,total,year_of_exam)
		VALUES ('$admn','$regn','$sem','$subcode','$internal','$external','$total','$year_of_exam')";
		
		if(mysqli_query($con,$sqlinsert))
		echo 'record inserted';
		else
		die('error inserting record');

		$subcode2 =$_POST['subcode2'];
		$internal2  =$_POST['internal2'];
		$external2   =$_POST['external2'];
		$total2=$internal2+$external2;
		$grade2;
		$gpa2;

		gradegpa($mark2,$internal2);
		$sqlinsert="INSERT INTO result
		(admission_no,regn_no,sem,subcode,internal,external,total,year_of_exam)
		VALUES ('$admn','$regn','$sem','$subcode2','$internal2','$external2','$total2','$year_of_exam')";
		
		if(mysqli_query($con,$sqlinsert))
		echo 'record inserted';
		else
		die('error inserting record');

		$subcode3 =$_POST['subcode3'];
		$internal3   =$_POST['internal3'];
		$external3   =$_POST['external3'];
		$total3=$internal3+$external3;
		$grade3;
		$gpa3;

		gradegpa($mark3,$internal3);
		$sqlinsert="INSERT INTO result
		(admission_no,regn_no,sem,subcode,internal,external,total,year_of_exam)
		VALUES ('$admn','$regn','$sem','$subcode3','$internal3','$external3','$total3','$year_of_exam')";
		
		if(mysqli_query($con,$sqlinsert))
		echo 'record inserted';
		else
		die('error inserting record');

		$subcode4 =$_POST['subcode4'];
		$internal4   =$_POST['internal4'];
		$external4   =$_POST['external4'];
		$total4=$internal4+$external4;
		$grade4;
		$gpa4;

		gradegpa($mark4,$internal4);
		$sqlinsert="INSERT INTO result
		(admission_no,regn_no,sem,subcode,internal,external,total,year_of_exam)
		VALUES ('$admn','$regn','$sem','$subcode4','$internal4','$external4','$total4','$year_of_exam')";
		
		if(mysqli_query($con,$sqlinsert))
		echo 'record inserted';
		else
		die('error inserting record');

		$subcode5 =$_POST['subcode5'];
		$internal5   =$_POST['internal5'];
		$external5   =$_POST['external5'];
		$total5=$internal5+$external5;
		$grade5;
		$gpa5;

		gradegpa($mark5,$internal5);
		$sqlinsert="INSERT INTO result
		(admission_no,regn_no,sem,subcode,internal,external,total,year_of_exam)
		VALUES ('$admn','$regn','$sem','$subcode5','$internal5','$external5','$total5','$year_of_exam')";
		
		if(mysqli_query($con,$sqlinsert))
		echo 'record inserted';
		else
		die('error inserting record');

		$subcode6 =$_POST['subcode6'];
		$internal6   =$_POST['internal6'];
		$external6   =$_POST['external6'];
		$total6=$internal6+$external6;
		$grade6;
		$gpa6;

		gradegpa($mark6,$internal6);
		$sqlinsert="INSERT INTO result
		(admission_no,regn_no,sem,subcode,internal,external,total,year_of_exam)
		VALUES ('$admn','$regn','$sem','$subcode6','$internal6','$external6','$total6','$year_of_exam')";
		
		if(mysqli_query($con,$sqlinsert))
		echo 'record inserted';
		else
		die('error inserting record');

		$subcode7 =$_POST['subcode7'];
		$internal7   =$_POST['internal7'];
		$external7   =$_POST['external7'];
		$total7=$internal7+$external7;
		$grade7;
		$gpa7;

		gradegpa($mark7,$internal7);
		$sqlinsert="INSERT INTO result
		(admission_no,regn_no,sem,subcode,internal,external,total,year_of_exam)
		VALUES ('$admn','$regn','$sem','$subcode7','$internal7','$external7','$total7','$year_of_exam')";
		
		if(mysqli_query($con,$sqlinsert))
		echo 'record inserted';
		else
		die('error inserting record');

		$subcode8 =$_POST['subcode8'];
		$internal8   =$_POST['internal8'];
		$external8   =$_POST['external8'];
		$total8=$internal8+$external8;
		$grade8;
		$gpa8;

		gradegpa($mark8,$internal8);
		$sqlinsert="INSERT INTO result
		(admission_no,regn_no,sem,subcode,internal,external,total,year_of_exam)
		VALUES ('$admn','$regn','$sem','$subcode8','$internal8','$external8','$total8','$year_of_exam')";
		
		if(mysqli_query($con,$sqlinsert))
		echo 'record inserted';
		else
		die('error inserting record');
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
	<title> result </title>
  </head>
     <body>
    
         <h2> result </h2>
		 <form method="POST" action="result.php">
		 	<fieldset>
		 	<div>
				<label>Admission number</label>
				<input name="admission_no" type="int" placeholder="admission number"/>
			</div>

			<div >
				<label>registation number</label>
				<input name="regn_no" type="int" />
			</div>
			
			<div>
				<label>year of exam</label>
				<input type="date" name="yoe">
			</div>
			
			<div>
				<label>semester</label>
				<input name="sem" type="int" />
			</div>
			
			<div >
				
				<label>subcode</label>
				<input name="subcode" type="text" />

				<label>internal</label>
				<input name="internal" type="int" />
			
				<label>external</label>
				<input name="external" type="int" />
			</div>
			
			<div >
				<label>subcode</label>
				<input name="subcode2" type="text" />
			
				<label>internal</label>
				<input name="internal2" type="int" />
			
				<label>external</label>
				<input name="external2" type="int" />
			</div>

			<div >
				<label>subcode</label>
				<input name="subcode3" type="text" />
			
				<label>internal</label>
				<input name="internal3" type="int" />
			
				<label>external</label>
				<input name="external3" type="int" />
			</div>

			<div >
				<label>subcode</label>
				<input name="subcode4" type="text" />
			
				<label>internal</label>
				<input name="internal4" type="int" />
			
				<label>external</label>
				<input name="external4" type="int" />
			</div>

			<div >
				<label>subcode</label>
				<input name="subcode5" type="text" />
			
				<label>internal</label>
				<input name="internal5" type="int" />
			
				<label>external</label>
				<input name="external5" type="int" />
			</div>

			<div >
				<label>subcode</label>
				<input name="subcode6" type="text" />
			
				<label>internal</label>
				<input name="internal6" type="int" />
			
				<label>external</label>
				<input name="external6" type="int" />
			</div>

			<div >
				<label>subcode</label>
				<input name="subcode7" type="text" />
			
				<label>internal</label>
				<input name="internal7" type="int" />
			
				<label>external</label>
				<input name="external7" type="int" />
			</div>

			<div >
				<label>subcode</label>
				<input name="subcode8" type="text" />
			
				<label>internal</label>
				<input name="internal8" type="int" />
			
				<label>external</label>
				<input name="external8" type="int" />
			</div>

			</fieldset>
			<br/>
			<input type="submit" value="Submit" name="submit"/>
		</form>
      </body>
</html>