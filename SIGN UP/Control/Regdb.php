<?php
class Regdb{
    
    function OpenCon()
    {
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "HousingManagement";
    $table= "users";
        $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
        return $conn;
    }
    
    function insertUser($conn,$fname,$lname,$password,$email,$gender,$profession,$date,$file)
    {
        $stmt=$conn->prepare("insert into users(firstname,lastname,password,email,gender,profession,date,file) values(?,?,?,?,?,?,?,?)") or die(mysqli_error($conn));
        $stmt->bind_param("ssssssss",$fname,$lname,$password,$email,$gender,$profession,$date,$file) or die(mysqli_error($conn));
        $stmt->execute();
        echo "<h3>Registration Successful!</h3>";
        $stmt->close();
    }

    /*function insertUser($conn,$fname,$lname,$password,$email,$gender,$profession,$date,$file)
    {
        $result=$conn->query("insert into users(firstname,lastname,password,email,gender,profession,date,file) values('$fname','$lname','$password','$email','$gender','$profession','$date','$file')") or die(mysqli_error($conn));
        return $result;
        echo "<h3>Registration Successful!</h3>";
    }*/
    function CloseCon($conn)
     {
     $conn -> close();
     }
}
?>