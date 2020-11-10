<?php
class Logindb{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "HousingManagement";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 function CheckUser($conn,$table,$fname,$password)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE firstname='". $fname."' AND password='". $password."'");
 return $result;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>