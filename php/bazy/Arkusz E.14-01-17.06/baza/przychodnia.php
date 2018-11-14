<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title>Przychodnia</title>
    <link rel="stylesheet" href="przychodnia.css">
  </head>
  <body>
    <div id="baner">
      <h1>PRAKTYKA LEKARZA RODZINNEGO</h1>
    </div>
    <div id="lewy">
      <h3>LISTA PACJENTÓW</h3>
      <!--zapytanie 1 -->
      <?php
      //połączenie z serwerem mysql
      if(@$polaczenie = mysqli_connect('localhost', 'root','')){
      }else {
        echo "Nieudane połączenie z serwerem MySQL";}

      mysqli_set_charset($polaczenie, 'utf8');
      //połączenie z bazą danych weterynaz
      if (mysqli_select_db($polaczenie, 'przychodnia')) {
      }else {
        echo "Błędne połączenie z bazą danych weterynarz";}

      $zapytanie = "SELECT `id`,`imie`,`nazwisko` FROM `pacjenci`";

      if($rezultat = mysqli_query($polaczenie, $zapytanie)){
        while($wiersz = mysqli_fetch_assoc($rezultat)){
          echo <<<WIERSZ
          $wiersz[id]
          $wiersz[imie]
          $wiersz[nazwisko] <br>
WIERSZ;
        }
      }else {
        echo "Błędne zapytanie";
      }

      ?>
      <br>
      <br>
      <form class="" action="pacjent.php" method="post">
        Podaj id: <br>
        <input type="number" name="id">
        <input type="submit" name="potwierdzenie" value="Pokaż dane">
      </form>
      <h3>LEKARZE</h3>
      <ul>
        <li> Pon-śr
          <ol>
            <li>Anna Kwiatkowska</li>
            <li>Jan Kowalewski</li>
          </ol>
        </li>
        <li> Czw-pt
          <ol>
            <li>Krzysztof Nowak</li>
          </ol>
        </li>
      </ul>
    </div>

    <div id="prawy">
      <h2>INFORMACJE SZCZEGÓŁOWE O PACJENCIE</h2>
      <p>Brak wybranego pacjenta</p>
    </div>

    <div id="stopka">
      <p>Stworzone przez mm</p>
      <a href="zapytania.txt">Pobierz plik z kwerendami</a>
    </div>
  </body>
</html>
