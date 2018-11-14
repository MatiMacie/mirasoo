<!--Użytkownik podaje w formie ile ma ulub koloró,
któy wyświetli tyle pół tekstowych ile wpisał ulubionych kolorów, wygląda to tak:
kolor1:....
kolor2:....
kolor3:....
-->
<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title>Formularze2</title>
  </head>
  <body>
<form method="post">
    <input type="number" name="ile">
    <input type="submit" name="przycisk" value="Zatwierdź"><hr>
</form>
<?php
    if(isset($_POST['przycisk'])){ // && $_POST['$ile'] > 0
      $ile = $_POST['ile'];
  ?>
  <h4>Podaj kolory</h4>
    <form method="post">
      <?php
        for ($i=1; $i <= $ile ; $i++) {
          echo "<input type=\"text\" name=\"kolor$i\">"." Wpisz kolor $i"."<br><br>";
        }
      ?>
      <input type="submit" name="guzior" value="zatwierdź">
      <input type="hidden" name="ile" value="<?php echo $ile; ?>">
    </form>


<?php
}

  if(isset($_POST['guzior']) ){
    echo "<h2>Kolory:</h2><br>";
    $ile = $_POST['ile'];
    for ($j=1; $j <= $ile ; $j++) {
      $kolor = "kolor$j";
      echo "Kolor $j: ".$_POST[$kolor]."<br><br>";
    }
  }
?>

  </body>
</html>
