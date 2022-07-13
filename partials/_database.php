<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "medical";

$conn = mysqli_connect($servername , $username , $password , $database);
if(!$conn)
{
    die("Failed to connect to database".mysqli_connect_error());
}

?>