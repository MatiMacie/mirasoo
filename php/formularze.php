<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title>Formualrze</title>
  </head>
  <body>
    <form method="post">
        <input type="text" name="imie" value="" placeholder="Imię"><br/>
        <input type="text" name="Nazwisko" value="" placeholder="Nazwisko"><br/>
        <input type="submit" name="przycisk" value="Wyślij"><br/>
    </form>
<?php
  if (isset($_POST['przycisk'])) {
    $imie = $_POST['imie'];
    $nazwisko = $_POST['Nazwisko'];
    if (empty($imie) || empty($nazwisko)) {
      echo "Nie wprowadziłeś dobrze danych kretynie";
    }else {
      echo "Imię:<span style=\"color: red; font-weight: bold;\">$imie</span>"."<br>";
      echo "Nazwisko:<span style=\"color: red; font-weight: bold;\">$nazwisko</span>";
    }
  }
?>

  </body>
</html>
