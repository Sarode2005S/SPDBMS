<?php
     //collect the input
     $rno = $_POST['rno'];
     //connection to databses
	 $con=mysqli_connect("localhost","root","","spdbms");
	 if(!$con)
		 die("Error-".mysqli_error(Scon));
	 
	 //Prepare the query
	 $query = "DELETE  FROM students_info WHERE Roll_No=$rno;";
	 
	 //Execute the query
	 $res = mysqli_query($con,$query);
	 
	 //process the results return by dbms
	 if($res)
	 {
		 require_once "Delete_Student.html";
		 echo "<h1><center>Deletion Succsessfull!</center></h1>";
	 }
	 else
	 {
		 require_once "Delete_Student.html";	
		 echo "<h1><center>Record Not Found.</center></h1>";
	 }
	 //close the connection to databse
	 mysqli_close($con);
  
?>