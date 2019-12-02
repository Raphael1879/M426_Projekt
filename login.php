<?php

session_start();

$benutzername = $_GET['inputUsername'];
$password = $_GET['inputPassword'];

$_SESSION['inputUsername'] = $benutzername;
$_SESSION['inputPassword'] = $password;


include "footer.php";
?>
