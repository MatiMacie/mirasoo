<?php
  session_start();
  unset($_SESSION['imie']);
?>
<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title>Sesja strona 3</title>
  </head>
  <body>
    <h3>Strona 3</h3>
    Witamy
    <?php
    echo $_SESSION['imie']," w szkole!",'<br>';
    echo "Identyfikator sesji ",session_id();
    ?>
    <a href="./sesja1.php">Strona startowa</a>
    
  </body>
</html>
