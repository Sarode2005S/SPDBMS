<?php
    //collect the input
   $username = $_POST['usrn'];
   $password= $_POST['pswd'];
   //open the connection to dbms
   $con=mysqli_connect("localhost","root","","spdbms");
   
   //check connection has suceed or not
   if(!$con)
	   die('Failed to connect to DBMS'.mysqli_error());
   
   //prepare and execute an sql query
   $query = "SELECT * FROM admin WHERE username=\"$username\" AND password= \"$password\";";
   $result = mysqli_query($con,$query);
   $rows=mysqli_num_rows($result);
   
  
   if($rows!=0)
	   require_once "index.html";
   else
   {
	   require_once "admin_login.html";
	   echo "<center><h1><b>Enter vaild login details!</h1></center>";
   }
    //close the connection to database
	 mysqli_close($con);
   
   
?>