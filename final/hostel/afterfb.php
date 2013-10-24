<?php
session_start();
$con=mysql_connect("localhost","root","") or die("Database can not be connected");
$n=mysql_select_db("hostel_portal") or die ("Database can not selected");
$roll=$_POST['roll'];
$fb1=$_POST['fb'];


 $row1 = mysql_query("update registration set fb='$fb1' where Userid='$roll'"); 
 
if($row1)
  {
	  //$_SESSION['notfound'] =true;
	  //header("location:cmpsub.php");
	  echo'<script>alert("successful!....")</script>';
 	  }  
 //else 
    
    
  ?>