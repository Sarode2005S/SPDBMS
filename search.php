<?php
     //collect the input
     $rno = $_POST['rno'];
     //connection to databses
	 $con=mysqli_connect("localhost","root","","spdbms");
	 if(!$con)
		 die("Error-".mysqli_error);
	 //Prepare the query
	 $query = "SELECT * FROM students_info WHERE Roll_No=$rno;";
	 
	 //Execute the query
	 $res = mysqli_query($con,$query);
	 
	 //process the results return by dbms
	 $rows = mysqli_num_rows($res);
	 if($rows!=0)
	 {require_once "Search_Student.html";
		 echo "<table align = \"center\" border=\"6\">";
		echo "<tr><th>Regd.No</th><th>Student Name</th><th>Stream</th><th>Contact</th><th>E-Mail</th><th>Operations</th></tr>";
	     $record = mysqli_fetch_array($res);
	        echo "<tr><td>".$record['Roll_No']."</td><td>".$record['Name']."</td><td>".$record['Stream']."</td><td>".$record['Contact']."</td><td>".$record['Email']."</td><td><a href=\"Add_Student.html\"><u><input type=\"submit\" value=\"update\"></u></a><a href=\"Delete_Student.html\"><br/><input type=\"submit\" value=\"Delete\"></a></td></tr>";
     echo "</table></body>";
	 }
	 else
	 {
		 require_once "Search_Student.html";	
		 echo "<h1><center>Record Not Found.</center>";
	 }
	 //close the connection to databse
	 mysqli_close($con);
  
?>