
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
		$grade=$_POST['grade'];
		$credit=$_POST['credit'];
		$gpa=$_POST['gpa'];
		$sqlinsert="INSERT INTO semgpa(admission_no,sem,gpa)
		VALUES('$admn','$sem','$gpa')";
		if(!mysqli_query($con,$sqlinsert))
		die('cannot insert gpa');
		else echo'gpa inserted';

		
		//gradegpa($mark,$internal);
		//echo $sqlinsert;
		$sqlinsert="INSERT INTO result
		(admission_no,regn_no,sem,subcode,internal,external,total,year_of_exam,credit,grade)
		VALUES ('$admn','$regn','$sem','$subcode','$internal','$external','$total','$year_of_exam','$credit','$grade')";
		
		if(mysqli_query($con,$sqlinsert))
		echo 'record inserted';
		else
		die('error inserting record 1');

		$subcode2 =$_POST['subcode2'];
		$internal2  =$_POST['internal2'];
		$external2   =$_POST['external2'];
		$total2=$internal2+$external2;
		$grade2=$_POST['grade2'];
		$credit2=$_POST['credit2'];
		$year_of_exam2  =$_POST['yoe2'];

		//gradegpa($mark2,$internal2);
		$sqlinsert="INSERT INTO result
		(admission_no,regn_no,sem,subcode,internal,external,total,year_of_exam,credit,grade)
		VALUES ('$admn','$regn','$sem','$subcode2','$internal2','$external2','$total2','$year_of_exam2','$credit2','$grade2')";
		
		if(mysqli_query($con,$sqlinsert))
		echo 'record inserted';
		else
		die('error inserting record2');

		$subcode3 =$_POST['subcode3'];
		$internal3   =$_POST['internal3'];
		$external3   =$_POST['external3'];
		$total3=$internal3+$external3;
		$grade3=$_POST['grade3'];
		$credit3=$_POST['credit3'];
		$year_of_exam3  =$_POST['yoe3'];

		//gradegpa($mark3,$internal3);
		$sqlinsert="INSERT INTO result
		(admission_no,regn_no,sem,subcode,internal,external,total,year_of_exam,credit,grade)
		VALUES ('$admn','$regn','$sem','$subcode3','$internal3','$external3','$total3','$year_of_exam3','$credit3','$grade3')";
		
		if(mysqli_query($con,$sqlinsert))
		echo 'record inserted';
		else
		die('error inserting record3');

		$subcode4 =$_POST['subcode4'];
		$internal4   =$_POST['internal4'];
		$external4   =$_POST['external4'];
		$total4=$internal4+$external4;
		$grade4=$_POST['grade4'];
		$credit4=$_POST['credit4'];
		$year_of_exam4  =$_POST['yoe4'];

		//gradegpa($mark4,$internal4);
		$sqlinsert="INSERT INTO result
		(admission_no,regn_no,sem,subcode,internal,external,total,year_of_exam,credit,grade)
		VALUES ('$admn','$regn','$sem','$subcode4','$internal4','$external4','$total4','$year_of_exam4','$credit4','$grade4')";
		
		if(mysqli_query($con,$sqlinsert))
		echo 'record inserted';
		else
		die('error inserting record4');

		$subcode5 =$_POST['subcode5'];
		$internal5   =$_POST['internal5'];
		$external5   =$_POST['external5'];
		$total5=$internal5+$external5;
		$grade5=$_POST['grade5'];
		$credit5=$_POST['credit5'];
		$year_of_exam5  =$_POST['yoe5'];

		//gradegpa($mark5,$internal5);
		$sqlinsert="INSERT INTO result
		(admission_no,regn_no,sem,subcode,internal,external,total,year_of_exam,credit,grade)
		VALUES ('$admn','$regn','$sem','$subcode5','$internal5','$external5','$total5','$year_of_exam5','$credit5','$grade5')";
		
		if(mysqli_query($con,$sqlinsert))
		echo 'record inserted';
		else
		die('error inserting record5');

		$subcode6 =$_POST['subcode6'];
		$internal6   =$_POST['internal6'];
		$external6   =$_POST['external6'];
		$total6=$internal6+$external6;
		$grade6=$_POST['grade6'];
		$credit6=$_POST['credit6'];
		$year_of_exam6  =$_POST['yoe6'];

		//gradegpa($mark6,$internal6);
		$sqlinsert="INSERT INTO result
		(admission_no,regn_no,sem,subcode,internal,external,total,year_of_exam,credit,grade)
		VALUES ('$admn','$regn','$sem','$subcode6','$internal6','$external6','$total6','$year_of_exam6','$credit6','$grade6')";
		
		if(mysqli_query($con,$sqlinsert))
		echo 'record inserted';
		else
		die('error inserting record6');

		$subcode7 =$_POST['subcode7'];
		$internal7   =$_POST['internal7'];
		$external7   =$_POST['external7'];
		$total7=$internal7+$external7;
		$grade7=$_POST['grade7'];
		$credit7=$_POST['credit7'];
		$year_of_exam7  =$_POST['yoe7'];

		//gradegpa($mark7,$internal7);
		$sqlinsert="INSERT INTO result
		(admission_no,regn_no,sem,subcode,internal,external,total,year_of_exam,credit,grade)
		VALUES ('$admn','$regn','$sem','$subcode7','$internal7','$external7','$total7','$year_of_exam7','$credit7','$grade7')";
		
		if(mysqli_query($con,$sqlinsert))
		echo 'record inserted';
		else
		die('error inserting record7');

		$subcode8 =$_POST['subcode8'];
		$internal8   =$_POST['internal8'];
		$external8   =$_POST['external8'];
		$total8=$internal8+$external8;
		$grade8=$_POST['grade8'];
		$credit8=$_POST['credit8'];
		$year_of_exam8  =$_POST['yoe8'];

		//gradegpa($mark8,$internal8);
		$sqlinsert="INSERT INTO result
		(admission_no,regn_no,sem,subcode,internal,external,total,year_of_exam,credit,grade)
		VALUES ('$admn','$regn','$sem','$subcode8','$internal8','$external8','$total8','$year_of_exam8','$credit8','$grade8')";
		
		if(mysqli_query($con,$sqlinsert))
		echo 'record inserted';
		else
		die('error inserting record8');
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
	<title> result </title>
	<style>
	th{padding-left: 100px;}
</style>
  </head>
     <body>
    
         <h2> result </h2>
		 <form method="POST" action="completeresult.php">
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
				<label>semester</label>
				<input name="sem" type="int" />
			</div>

			<div>
				<label>gpa</label>
				<input name="gpa" type="int" />
			</div>
			
			<div>
			<table>	<tr><th>subcode</th><th>internal</th><th>external</th><th>credit</th><th>grade</th><th>year of exam</th></tr></table>
			</div>
			<table>
				<tr>
				<td>
				<input name="subcode" type="text" />
				</td>
				<td>
				<input name="internal" type="int" />
				</td>
				<td>
				<input name="external" type="int" />
			</td>
				<td>
				<input name="credit" type="text" />
			</td>
				<td>
				<input name="grade" type="text" />
				</td>
				<td>
				<input name="yoe" type="date" />
				</td>
			</tr>
			
			
			<tr>
				<td>
				<input name="subcode2" type="text" />
				</td>
				<td>
				<input name="internal2" type="int" />
				</td>
				<td>
				<input name="external2" type="int" />
			</td>
				<td>
				<input name="credit2" type="text" />
			</td>

				<td>
				<input name="grade2" type="text" />
				</td>
				<td>
				<input name="yoe2" type="date" />
				</td>
			</tr>

			<tr>
				<td>
				<input name="subcode3" type="text" />
				</td>
				<td>
				<input name="internal3" type="int" />
				</td>
				<td>
				<input name="external3" type="int" />
			</td>
				<td>
				<input name="credit3" type="text" />
			</td>
				<td>
				<input name="grade3" type="text" />
			</td>
			<td>
				<input name="yoe3" type="date" />
				</td>
		</tr>

			<tr>
				<td>
				<input name="subcode4" type="text" />
				</td>
				<td>
				<input name="internal4" type="int" />
				</td>
				<td>
				<input name="external4" type="int" />
			</td>
				<td>
				<input name="credit4" type="text" />
			</td>
				<td>
				<input name="grade4" type="text" />
			</td>
			<td>
				<input name="yoe4" type="date" />
				</td>
		</tr>
		<tr>
				<td>
				<input name="subcode5" type="text" />
				</td>
				<td>
				<input name="internal5" type="int" />
				</td>
				<td>
				<input name="external5" type="int" />
			</td>
				<td>
				<input name="credit5" type="text" />
			</td>
				<td>
				<input name="grade5" type="text" />
			</td>
			<td>
				<input name="yoe5" type="date" />
				</td>
		</tr>
		<tr>
				<td>
				<input name="subcode6" type="text" />
				</td>
				<td>
				<input name="internal6" type="int" />
				</td>
				<td>
				<input name="external6" type="int" />
			</td>
				<td>
				<input name="credit6" type="text" />
			</td>
				<td>
				<input name="grade6" type="text" />
			</td>
			<td>
				<input name="yoe6" type="date" />
				</td>
		</tr>
		<tr>
				<td>
				<input name="subcode7" type="text" />
				</td>
				<td>
				<input name="internal7" type="int" />
				</td>
				<td>
				<input name="external7" type="int" />
			</td>
				<td>
				<input name="credit7" type="text" />
			</td>
				<td>
				<input name="grade7" type="text" />
			</td>
			<td>
				<input name="yoe7" type="date" />
				</td>
		</tr>
		<tr>
				<td>
				<input name="subcode8" type="text" />
				</td>
				<td>
				<input name="internal8" type="int" />
				</td>
				<td>
				<input name="external8" type="int" />
			</td>
				<td>
				<input name="credit8" type="text" />
			</td>
				<td>
				<input name="grade8" type="text" />
			</td>
			<td>
				<input name="yoe8" type="date" />
				</td>
		</tr>
			</table>
			</fieldset>
			<br/>
			<input type="submit" value="Submit" name="submit"/>
		</form>
      </body>
</html>