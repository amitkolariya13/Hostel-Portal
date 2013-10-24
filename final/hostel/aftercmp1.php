<?php
session_start();
$con=mysql_connect("localhost","root","") or die("Database can not be connected");
$n=mysql_select_db("hostel_portal") or die ("Database can not selected");
$roll=$_POST['roll'];
$add1=$_POST['add'];
$cmp1=$_POST['cmp'];

 $row1 = mysql_query("update registration set addr='$add1' where Userid='$roll'"); 
 $row2 = mysql_query("update registration set cmp='$cmp1' where Userid='$roll'");
if($row2)
  {
	  //$_SESSION['notfound'] =true;
	  //header("location:cmpsub.php");
	  echo'<script>alert("successful!....")</script>';
 	  }  
 //else 
    
    // {
	 //$_SESSION['wrongpass'] = true;
	 //header("location:cmpsub.php");
 	  	// }
  ?>