<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title>Sesja strona 2</title>
  </head>
  <body>
    <h3>Strona 2</h3>
    Witamy
    <?php
    echo $_SESSION['imie']," w szkole!",'<br>';
    echo "Identyfikator sesji ",session_id();
    ?>
    <a href="./sesja3.php">Strona 3</a>
  </body>
</html>
