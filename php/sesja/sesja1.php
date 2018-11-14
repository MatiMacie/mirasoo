<?php
  session_start();
  $_SESSION['imie']='Oliwer';
?>
<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title>Sesja strona 1</title>
  </head>
  <body>
    <h3>Strona pierwsza</h3>
    Witamy
    <?php
    echo $_SESSION['imie']," w szkole!",'<br>';
    echo "Identyfikator sesji ",session_id();
    ?>
    <a href="./sesja2.php">Strona 2</a>
    <a href="./sesja1.php?usunsesje=1">usun sesje</a>
    <?php
      if (isset($_GET['usunsesje']) && $_GET['usunsesje']==1) {
        session_destroy();
      }
     ?>
  </body>
</html>
