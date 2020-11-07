<?php

session_start(); 

 $error="";
// store session data
$fname = $lname = $password = "";
$fnameError = "";
$lnameError = "";
$passwordError = "";
$printfname = "";
$printlname = "";
$printpassword = "";

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if (isset($_POST['submit'])) 
{

  $fname = test_input($_POST["fname"]);
  $lname = test_input($_POST["lname"]);
  $password = test_input($_POST["password"]);
  if (empty($fname) || (!preg_match("/^[a-zA-Z-' ]*$/",$fname)))
  {
    $fnameError = "<p style ='color:red'>Please enter your First Name!</p>";
  }
  else
  {
    $printfname = $fname;
    $_SESSION["fname"] = $fname;
  }

  if (empty($lname)||(!preg_match("/^[a-zA-Z-' ]*$/",$lname)))
  {
    $lnameError = "<p style ='color:red'>Please enter your Last Name!</p>";
  }
  else
  {
   $printlname = $lname;
   $_SESSION["lname"] = $lname;
  }

  if (empty($password))
  {
    $passwordError = "<p style ='color:red'>Please make your Password!</p>";
  }
  else
  {
   $printpassword = $password;
   $_SESSION["password"] = $password;
  }

}
?>