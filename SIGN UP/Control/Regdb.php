<?php
class Regdb{
    
    function OpenCon()
    {
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "housingmanagement";
    $table= "users";
        $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
        return $conn;
    }
    
    function insertUser($conn,$fname,$lname,$password,$email,$gender,$profession,$date)
    {
        $result=$conn->query("insert into users(firstname,lastname,password,email,gender,profession,date) values('$fname','$lname','$password','$email','$gender','$profession','$date')") or die(mysqli_error($conn));
        return $result;
        echo "<h3>Registration Successful!</h3>";
    }
    function CloseCon($conn)
     {
     $conn -> close();
     }
}
?>