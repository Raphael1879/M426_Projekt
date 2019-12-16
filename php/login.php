<?php
session_start();
$benutzername = $_GET['inputUsername'];
$password = $_GET['inputPassword'];
$connection = mysqli_connect("127.0.0.1", "admin", "Admin123", "m426");

$query = "select * from person where username='$benutzername' and passwort='$password'";
$data = mysqli_query($connection, $query);
$row = mysqli_fetch_array($data);
if($row[1] == $benutzername && $row[4] == $password){
  echo "user exist";
} else {
  header('Location: ../index.html');
}

 ?>
