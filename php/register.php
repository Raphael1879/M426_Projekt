<?php
session_start ();
$benutzername = $_GET['inputUsername'];
$email = $_GET['inputEmail'];
$rolle = $_GET['inputRole'];
$password = $_GET['inputPassword'];


/*$_SESSION['inputUsername'] = $benutzername;
$_SESSION['inputPassword'] = $password;
$_SESSION['inputRole'] = $rolle;
*/

$connection = mysqli_connect("127.0.0.1", "admin", "Admin123", "m426");
$select = "insert into person(username, email, rolle, passwort) values('$benutzername', '$email', '$rolle', '$password' )";
mysqli_real_query($connection, $select);

if ($connection) {

    echo "Sie haben sich registriert";
    echo "<a href='../pages/login.html'>Weiterleitung zum Login</a>";
    exit;
}



?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
  <body>
    <header class="container">
      <div class="jumbotron">
        <h1>Benutzerinformationen</h1>
        <article>

        </article>
      </div>
    </header>


    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
