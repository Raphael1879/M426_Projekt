<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <header class="container">
      <div class="jumbotron">
        <h1>Benutzerinformationen</h1>
        <article>
           <?php echo "<h4> Dein Benutzername lautet: " . $_SESSION['inputUsername'] . "<br>" . "und dein Passwort: " . $_SESSION['inputPassword'] . "</h4>"; ?>
        </article>
      </div>
    </header>


    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.js"></script>
  </body>
</html>
