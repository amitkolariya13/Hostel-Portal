<?php
session_start();
include('db_connect.php');
$id=$_POST['name'];
$phone=$_POST['tel'];
$email=$_POST['email'];
$password=$_POST['password'];
$q="INSERT INTO registration (Userid,Phone_No,Email,Password) VALUES('$id','$phone','$email','$password')";
$res=mysql_query($q) or die("Error in inserting data ");
if($res)
 {
   $_SESSION[regsuccess]=true;
   header('location:login.php');
}
else
{
 echo "<script>alert('Registration Failed')</script>";
 header('location:registration.php');
 }
?>