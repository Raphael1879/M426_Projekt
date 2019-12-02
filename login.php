<?php

$benutzername = $_GET['inputUsername'];
$password = $_GET['inputPassword'];


if (isset($benutzername) && isset($password)) {

  echo "Hallo " . $benutzername . " dein Passwort lautet " . $password;
}

 ?>
