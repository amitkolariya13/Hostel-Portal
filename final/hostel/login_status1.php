<?php
//session_start();
include('db_connect.php');
$id=$_POST['name'];
$password=$_POST['password'];
$result=mysql_query("SELECT Userid FROM registration WHERE Userid='$id' ") or die(" Can not Select");
$result1=mysql_query("SELECT Userid FROM registration WHERE Userid='$id' and Password='$password'") or die(" Can not Select");

  if(mysql_num_rows($result)==1 and mysql_num_rows($result1)==0)
  {
	  //$_SESSION['notfound'] =true;
	  header("location:wrong_password.php");
 	  }  
  else if(mysql_num_rows($result)==0)
    
     {
	 //$_SESSION['wrongpass'] = true;
	 header("location:reg_req.php");
 	  	 }
  else 
    {
	 //$_SESSION['id'] = $id;
	  header("location:afterlogin.php");
	  
	}	 
//$res=mysql_query($result) or die("Error in inserting data ");
//echo 'Registration Success for Roll Number :';
//echo $id;

?>