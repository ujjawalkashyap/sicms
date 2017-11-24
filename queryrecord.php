
<!DOCTYPE html>
<html lang="en">
  <head>
	<title> index card </title>
	<style>
	table{
		border-style:solid;
		border-color:black;
		border-width:2px;
	}
	th{text-align:left;
		padding-left: 5%;
		
	border-style: solid;
    border-color: black;
    border-width: 2px;
    width:224px;
}
 td{text-align:left;
		padding-left: 5%;
		
	border-style: solid;
    border-color: black;
    border-width: 2px;
    width:400px;
}
  	</style>
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
		
		$result=mysqli_query($con,$sqlinsert);
		$res=$result->fetch_assoc();
		echo "<h3> Personal Details</h3>";
		echo "<br/>"."<table >"." "."<tr><th>"."admission number"."<td>".$res['admission_no']."</td></th></tr>"." "."<tr><th>Name <td>".$res['first_name']." ".$res['last_name']."</td></tr>"."<tr><th>Cat Rank</th><td> ".$res['cat_rank']."</td></tr>"." "."<tr><th>Year of admission </th><td>".$res['year_of_admission']."</td></tr>"." "."<tr><th>Branch </th><td>".$res['branch']."</td></tr>"." "."<tr><th>Date of Birth </th><td>".$res['dob']."</td></tr>"." "."<tr><th>Age</th><td>".$res['age']."</td></tr>"." "."<tr><th>Sex </th><td>".$res['sex']."</td></tr>"." "."<tr><th>email-id </th><td>".$res['email']."</td></tr>"." "."<tr><th>Contact number </th><td>".$res['contact_no']."</td></tr>"." "."<tr><th>Blood Group </th><td>".$res['blood_group']."</td></tr>"." "."<tr><th>Religion </th><td>".$res['religion']."</td></tr>"." "."<tr><th>Caste </th><td>".$res['caste']."</td></tr>"." "."</table>";

		$sqlinsert ="SELECT * FROM  family_details
		WHERE admission_no=$admn";
		if(!mysqli_query($con,$sqlinsert))
			die('cant query');
		$result=mysqli_query($con,$sqlinsert);
		$res=$result->fetch_assoc();
		
		echo "<h3> Family Details</h3>";
		echo "<h4>Father's name,occupation,contact number and email-id</h4>"; 
		echo "<table>"."<tr><th>Name</th><td>".$res['f_fname']." ".$res['f_lname']."</td></tr>"." "."<tr><th>Occupation</th><td>".$res['f_occ']."</td></tr>"." "."<tr><th>Contact </th><td>".$res['f_contact']."</td></tr>"." "."<tr><th>email-id</th><td>".$res['f_email']."</td></tr>"."</table>";

		echo "<h4>Father's name,occupation,contact number and email-id</h4>";
		echo "<table>"."<tr><th>Name</th><td>".$res['m_fname']." ".$res['m_lname']."</td></tr>"." "."<tr><th>Occupation</th><td>".$res['m_occ']."</td></tr>"." "."<tr><th>Contact </th><td>".$res['m_contact']."</td></tr>"." "."<tr><th>email-id</th><td>".$res['m_email']."</td></tr>"."</table>"; 

		
		$sqlinsert ="SELECT * FROM  past_record
		WHERE admission_no=$admn";
		if(!mysqli_query($con,$sqlinsert))
			die('cant query');
		
		$result=mysqli_query($con,$sqlinsert);
		$cnt=1;
		echo "<h3> Past Academic Details</h3>";
		while($row=$result->fetch_assoc())
		{
			echo "<h4>"."Course $cnt"."</h4>";
			echo "<table>"."<tr><th>Course </th><td>".$row['course']." "."<tr><th>Board</th><td>".$row['board']." "."<tr><th>Percentage or CGPA</th><td>".$row['percentage_cgpa']." "."<tr><th>Year of Passing</th><td>".$row['year_of_passing']." "."<tr><th>Registration Number</th><td>".$row['regn']."</table>";
			$cnt=$cnt+1;
		}
		//."<tr><th></th><td>""</td></tr>".
		/*$reg="SELECT regn_no FROM  result
		WHERE admission_no=$admn";
		$regres=mysqli_query($con,$reg);
		echo "<h4>"."<tr><th>Registration Number</th><td>".$regres['regn_no']."</td></h4>";*/



		$sqlinsert ="SELECT * FROM  result
		WHERE admission_no=$admn
		ORDER BY sem";
		if(!mysqli_query($con,$sqlinsert))
			die('cant query');
		$result=mysqli_query($con,$sqlinsert);
		
		echo "<h3>Results</h3>";
		echo	"<table>";
		echo "<tr><th>Semester</th><th>Subject</th><th>Internal</th><th>External</th><th>Total</th><th>Credits</th><th>Grade</th><th>Year of Exam</th></tr>";
		while($row=$result->fetch_assoc())
		{
		echo "<tr><td>".$row['sem']."</td>"." "."<td>".$row['subcode']."</td>"." "."<td>".$row['internal']."</td>"." "."<td>".$row['external']." "."</td>"."<td>".$row['total']."</td>" ."<td>".$row['credit']."</td>"."<td>".$row['grade']."</td>"."<td>".$row['year_of_exam']."</td></tr>";
		}
		echo "</table>";
		$sqlinsert ="SELECT * FROM  address
		WHERE admission_no=$admn";
		if(!mysqli_query($con,$sqlinsert))
			die('cant query');
		
		$result=mysqli_query($con,$sqlinsert);
		$res=$result->fetch_assoc();
		echo "<h3> Local Address</h3>";
		echo "<table>"."<tr><th>Street</th><td>".$res['paddress']."</td></tr>"." "."<tr><th>City</th><td>".$res['paddress_city']."</td></tr>"." "."<tr><th>State</th><td>".$res['paddress_state']."</td></tr>"." "."<tr><th>Pin-code</th><td>".$res['pa_zip']."</table>";
		echo "<h3> Permanent Address</h3>";
		echo "<table>"."<tr><th>Street</th><td>".$res['laddress']."</td></tr>"." "."<tr><th>City</th><td>".$res['laddress_city']."</td></tr>"." "."<tr><th>State</th><td>".$res['laddress_state']."</td></tr>"." "."<tr><th>Pin-code</th><td>".$res['la_zip']."</td></tr>"."</table>";
	}
?>
</html>
