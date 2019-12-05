<?php
session_start ();
$benutzername = $_GET['inputUsername'];
$password = $_GET['inputPassword'];
$rolle = $_GET['inputRole'];
$_SESSION['inputUsername'] = $benutzername;
$_SESSION['inputPassword'] = $password;
$_SESSION['inputRole'] = $rolle;
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
          <?php echo "<h4> Ihr Benutzername ist: " . $_SESSION['inputUsername'] . "<br>" . "Ihr Passwort ist: " . $_SESSION['inputPassword'] . "</h4>";
                echo "<h4> Sie sind ein: " . $_SESSION['inputRole'] . "</h4>";?>
        </article>
      </div>
    </header>


    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
