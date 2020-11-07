<?php
session_start(); 
if(empty($_SESSION["fname"])) 
{
header("Location: Registration.php"); // Redirecting To Home Page
}
?>


<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
<meta name="viewport", content="width=device-width, initial-scale=1">
</head>
<style>
div#RegIndexBlock{width:270px;border:5px solid #ddd;padding:10px;margin:auto; text-align:center}
body{background-image: url('G.jpg'); background-repeat:no-repeat; background-size:cover; color:orange;font-size:18px}
</style>

<body>

<h6 style="font-size:10px; font-family: verdana; color: white"><?php include 'Header/header.php';?></h6>

<div id="RegIndexBlock">
<h1 style="color: #00E9FF; font-family: calibri">Home</h1>
<style>
h3{color:lightgreen}
h5{color:#00E9FF}
h6{color:white}
</style>

<h2 style="color:white">Hi! </h2> <h2 style="color:red"><?php echo  $_SESSION["fname"] . " " . $_SESSION["lname"]; ?><br></h2>
<b>
<?php
if(isset($_POST["submit"])) {
$target_dir = "Received/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
} else {
    echo "Sorry, there was an error uploading your file.";

}
}
?><br>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method='post' enctype = "multipart/form-data">
<h2 style="background-color: black;color:#00E9FF; border: 2px solid #ddd"><Label style="color:orange; font-family:calibri">Upload Your File</Label>
     <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" name="submit" value="Upload">
    </h2>
    </form>

<h2 style="color: #B6FF00"><marquee direction=left>Do you want to go to </marquee></h2> <a href="Account.php" style= "color:#00E9FF; font-family:calibri">Back</a>
<h2 style="color: #B6FF00"><marquee direction=left>Do you want to</marquee></h2> <a href="Reglogout.php" style= "color:#00E9FF; font-family:calibri">Log Out</a>

<h6 style="font-size:10px; font-family: verdana; text-align: center"><?php include 'Footer/footer.php';?></h6>
</b>

</div>
</body>
</html>


