<?php
include('Logindb.php');
session_start(); 

 $error="";
// store session data
$fname = $lname = $password = "";

if (isset($_POST['submit'])){
  if ((empty($_POST['fname']) || (!preg_match("/^[a-zA-Z-' ]*$/",$_POST['fname']))) || (empty($_POST['lname']) || (!preg_match("/^[a-zA-Z-' ]*$/",$_POST['fname']))) ||  empty($_POST['password'])) {
    $error = "<h4 style='color:red'>Username or Password is Invalid</h4>";
    }
    else
{

  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $password=$_POST['password'];
  

$connection = new Logindb();
$conobj=$connection->OpenCon();

$userQuery=$connection->CheckUser($conobj,"users",$fname,$password);

if ($userQuery->num_rows > 0) {
$_SESSION["fname"] = $fname;
$_SESSION["lname"] = $lname;
$_SESSION["password"] = $password;
   }
 else {
  $error = "<h4 style='color:red'>Username or Password is Invalid</h4>";
}
$connection->CloseCon($conobj);

}
}
?>