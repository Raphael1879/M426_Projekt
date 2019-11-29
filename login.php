<?php

$benutzername = $_GET['inputUsername'];
$password = $_GET['inputPassword'];


if (isset($_GET['inputUsername']) && isset($_GET['inputPassword'])) {

  echo "Hallo " . $benutzername . " dein Passwort lautet " . $password;
}

 ?>
