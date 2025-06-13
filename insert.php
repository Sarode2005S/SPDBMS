<?php
   //collect the input
   $rno = $_POST['rno'];
   $name = $_POST['name'];
   $stream = $_POST['stream'];
   $contact = $_POST['contact'];
   $email = $_POST['email'];
   
   //open the connection to dbms
   $con=mysqli_connect("localhost","root","","spdbms");
   
   //check connection has suceed or not
   if(!$con)
	   die('Failed to connect to DBMS'.mysqli_error());
   
   //prepare and execute an sql query
   $myquery = "INSERT INTO students_info values($rno,\"$name\",\"$stream\",$contact,\"$email\");";
   $result = mysqli_query($con,$myquery);
   if($result)
   {
	   require_once "Add_Student.html";
       echo "<h1><center>Registration sucessful</h1></center>";
   }
   else
   {
	   echo 'Error-'.mysqli_error($con);
   }
   //close the Connection
   mysqli_close($con);


?>