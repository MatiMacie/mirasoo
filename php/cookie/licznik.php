<?php

if(!isset($_COOKIE['licznik'])){
  $licznik=1;
}else{
  $licznik = $_COOKIE['licznik'];
  $licznik++;
}
  $dni = 5;
  setcookie('licznik',$licznik,time()+60*60*24*$dni);
?>

<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title>Licznik</title>
  </head>
  <body>
<?php
      echo $licznik;
?>
  <br>
  <a href="wyzerujlicznik.php?usun=1">Wyzeruj Licznik</a>
  </body>
</html>
