<?php

session_start();

$benutzername = $_GET['inputUsername'];
$password = $_GET['inputPassword'];
$rolle = $_GET['inputRole'];

$_SESSION['inputUsername'] = $benutzername;
$_SESSION['inputPassword'] = $password;
$_SESSION['inputRole'] = $rolle;


include "footer.php";
?>
