<!DOCTYPE html>
<html>
<head>
<title>Registration</title>
<meta name="viewport", content="width=device-width, initial-scale=1">
</head>
<style>
div#RegistrationBlock{width:270px;border:5px solid #ddd;padding:10px;margin:auto}
body{min-height: 100vh;
  background-image:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)), url('https://i.imgur.com/Kce5BG6.gif');
	background-position: center;
  background-repeat:no-repeat; background-size:cover}
</style>
<body>

<h6 style="font-size:10px; font-family: verdana; color: white"><?php include '../Header/header.php';?></h6>

<div id="RegistrationBlock">

<div style="background-image: url('../Images/F2.jpg');color:black; padding:20px;">

<div style="background-color: #0A0F48;color:#00E9FF; padding:0px;">

<?php

include('../Control/Registrationcheck.php');

if(isset($_SESSION['fname'])){
header("location: RegistrationResult.php");
}
?>
</div>

<div style="background-color:#0A0F48;color:#00E9FF;padding:0px;font-family:calibri">
<h1>Registration</h1>
</div>
<b>
<div style="background-image: url('../Images/F1.jpg');color:#B6FF00;padding:1px;">
<h2><marquee direction=left>No Account? Create your Account now!</marquee></h2>
</div>
<div style="background-image: url('../Images/F1.jpg');color:#00FFA8;padding:20px;font-size:18px">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method='post' enctype = "multipart/form-data">
  <Label>First Name:</label><br> <?php echo $error;?>
  <input type="text" name="fname" ><br><br>
  <Label>Last Name:</Label><br> <?php echo $error;?>
  <input type="text" name="lname" ><br><br>
  <Label>Password:</Label><br> <?php echo $error;?>
  <input type="password" name="password" ><br><br>
  <Label>Email Id:</Label><br>
  <input type="text" name="email" ><br><br>
  <Label>Choose your Gender:</Label><br>
  <span style="color:#FF9800">
  <input type="radio" name="gender" value="Male" checked> Male
  <input type="radio" name="gender" value="Female"> Female</span><br><br>
  <Label>What's your Profession?</Label><br>
  <span style="color:#FF9800">
  <input type="checkbox" name="profession" value="Doctor"> Doctor<br>
  <input type="checkbox" name="profession" value="Engineer" checked> Engineer
  </span><br><br>
  <label for="birthday">Birthday:</label>
  <input type="date" id="fname" name="date" >
  <br>

  <?php
if(isset($_POST["submit"])) {
$target_dir = "../Received/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "<br>The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
} else {
    echo "<h4 style='color:red'>Sorry! there was an error while uploading your file. Please fillup the form properly, choose your file and then submit.</h4>";

}
}
?>

<h2 style="background-color: black;color:#00E9FF; border: 2px solid #ddd"><Label style="color:orange; font-family:calibri">Upload Your File</Label>
     <input type="file" name="fileToUpload" id="fileToUpload">
    </h2>

  <input type="submit" name="submit" style="background-color:red; color:white; border:2px solid white; cursor:pointer" value="Submit">


  <style>
h4{color:red}
h5{color:#00E9FF}
h6{color:white}
</style>


  <?php
  /*
  if (!(empty($fname)||(!preg_match("/^[a-zA-Z-' ]*$/",$fname))))
  {
    echo "<h4 style='color:orange'>Your Input:</h4>";
    echo "<h4>First Name:</h4>";
    echo  "<h5>$printfname</h5>";
  }

  if (!(empty($lname)||(!preg_match("/^[a-zA-Z-' ]*$/",$lname))))
  {
    echo "<h4>Last Name:</h4>";
    echo  "<h5>$printlname</h5>";
  }

  if (!(empty($password)))
  {
    echo "<h4>Password:</h4>";
    echo  "<h5>$printpassword</h5>";
    echo "<h4>Gender:</h4>";
    echo  "<h5>$printgender</h5>";
    echo "<h4>Profession:</h4>";
    echo  "<h5>$printprofession</h5>";
  }
  */
?>


</form> 
<br>
<a href="Login.php" style= "color:#00E9FF; font-family:calibri">Login</a>
<a href="Account.php" style= "color:#00E9FF; font-family:calibri">Back</a><br><br>
</div>
</b>

<h6 style="font-size:10px; font-family: verdana; text-align: center"><?php include '../Footer/footer.php';?></h6>

</div>
</body>
</html>