<?php

// Retrieve data from form
$Teamname = $_POST['Teamname'];
$Captainname = $_POST['Captainname'];
$Phone = $_POST['Phone'];
$Email = $_POST['Email'];
// Create connection
$conn = new mysqli('localhost', 'root','', 'registrations');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
$sql=$conn->prepare("insert into reg (Teamname , Captainname , Phone , Email) values(? , ? , ? , ?)");
$sql->bind_param("ssis",$Teamname,$Captainname,$Phone,$Email);
$sql->execute();
echo"REGISTRATION SUCCESSFULL...";}
?>