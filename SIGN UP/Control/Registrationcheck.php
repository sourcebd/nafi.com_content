<?php
include('Regdb.php');
session_start(); 

 $error="";
// store session data
$fname = $lname = $password = $email= $gender = $profession = $date= $file= "";

if (isset($_POST['submit'])){
  if ((empty($_POST['fname']) || (!preg_match("/^[a-zA-Z-' ]*$/",$_POST['fname']))) || (empty($_POST['lname']) || (!preg_match("/^[a-zA-Z-' ]*$/",$_POST['lname']))) ||  (empty($_POST['password']))) {
    
    $error = "<h4 style='color:red'>Enter Correct Input</h4>";
    
    }
    else
{

  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $profession=$_POST['profession'];
  $date=$_POST['date'];
  $gender=$_POST['gender']; 
  $file=($_FILES['fileToUpload']['name']); 

$connection = new Regdb();
$conobj=$connection->OpenCon();

$userQuery=$connection->insertUser($conobj,$fname,$lname,$password, $email, $gender,$profession,$date,$file);


$_SESSION["fname"] = $fname;
$_SESSION["lname"] = $lname;
$_SESSION["password"] = $password;
$_SESSION["email"] = $email;
$_SESSION["gender"] = $gender;
$_SESSION["profession"] = $profession;
$_SESSION["date"] = $date;
$_SESSION[["fileToUpload"]["name"]]=$file;
  
$connection->CloseCon($conobj);

}
}
?>