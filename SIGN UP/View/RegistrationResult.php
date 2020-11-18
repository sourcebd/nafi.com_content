<?php
session_start(); 
if(empty($_SESSION["fname"])) 
{
header("Location: Registration.php"); // Redirecting To Home Page
}
error_reporting(0);
?>


<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<meta name="viewport", content="width=device-width, initial-scale=1">
</head>
<style>
div#RegistrationResultBlock{width:270px;border:5px solid #ddd;padding:10px;margin:auto; text-align:center; color:orange;font-size:18px}
body{min-height: 100vh;
  background-image:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)), url('https://i.imgur.com/Kce5BG6.gif');
	background-position: center;
  background-repeat:no-repeat; background-size:cover}
</style>
<body>

<h6 style="font-size:10px; font-family: verdana; color: white"><?php include '../Header/header.php';?></h6>

<div id="RegistrationResultBlock">
<h1 style="color: #00E9FF; font-family: calibri">Home</h1>
<style>
h3{color:lightgreen}
h5{color:#00E9FF}
h6{color:white}
</style>

<h2 style="color:white">Hi! </h2> <h2 style="color:red"><?php echo  $_SESSION["fname"] . " " . $_SESSION["lname"]; ?><br></h2>
<b>
<?php
  echo "<h3>Password:</h3>";
  echo $_SESSION["password"];
  echo "<h3>Email Id:</h3>";
  echo $_SESSION["email"];
  echo "<h3>Gender:</h3>";
  echo $_SESSION["gender"];
  echo "<h3>Profession:</h3>";
  echo $_SESSION["profession"];
  echo "<h3>Date:</h3>";
  echo $_SESSION["date"];
  echo "<h3 style='color:lightgreen'>Uploaded File:</h3>";
  echo $_SESSION[["fileToUpload"]["name"]];
?>

<h2 style="color: #B6FF00"><marquee direction=left>Do you want to</marquee></h2> <a href="../Control/Reglogout.php" style= "color:#00E9FF; font-family:calibri">Back</a><br><br>

<h6 style="font-size:10px; font-family: verdana; text-align: center"><?php include '../Footer/footer.php';?></h6>
</b>
</div>
</body>
</html>


