<?php
session_start();

if(session_destroy()) // Destroying All Sessions
{
header("Location: Registration.php"); // Redirecting To Home Page
}
?>