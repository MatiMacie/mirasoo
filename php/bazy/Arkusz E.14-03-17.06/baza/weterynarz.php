<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title>Weterynarz</title>
    <link rel="stylesheet" href="weterynarz.css">
  </head>
  <body>
      <div id="baner">
          <h1>GABINET WETERYNARYJNY</h1>
      </div>
      <div id="lewy">
          <h2>PSY</h2>
          <!-- skrypt nr1 -->

          <?php
          //połączenie z serwerem mysql
          if(@$polaczenie = mysqli_connect('localhost', 'root','')){
            //echo "Prawidłowe połączenie z serwerem MySQL";
          }else {
            echo "Nieudane połączenie z serwerem MySQL";}

          mysqli_set_charset($polaczenie, 'utf8');
          //połączenie z bazą danych weterynaz
          if (mysqli_select_db($polaczenie, 'weterynarz')) {
            //echo "Prawidłowe połączenie z bazą danych weterynarz";
          }else {
            echo "Błędne połączenie z bazą danych weterynarz";}

          $zapytanie = "SELECT `id`,`imie`,`wlasciciel` FROM `zwierzeta` WHERE rodzaj = 1";

          if($rezultat = mysqli_query($polaczenie, $zapytanie)){
            while($wiersz = mysqli_fetch_row($rezultat)){
              echo <<<WIERSZ
              $wiersz[0]
              $wiersz[1]
              $wiersz[2] <br>
WIERSZ;
            }
          }else {
            echo "Błędne zapytanie";
          }

          ?>

          <h2>KOTY</h2>
          <!-- skrypt nr2 -->
          <?php
          $zapytanie = "SELECT `id`,`imie`,`wlasciciel` FROM `zwierzeta` WHERE rodzaj = 2";
          if ($rezultat = mysqli_query($polaczenie, $zapytanie)) {
            while ($wiersz = mysqli_fetch_assoc($rezultat)) {
              echo <<<WIERSZ
              $wiersz[id]
              $wiersz[imie]
              $wiersz[wlasciciel]
              <br>
WIERSZ;
            }
          }else{
            echo "Błędne zapytanie";
          }
          ?>
      </div>
      <div id="srodek">
          <h2>SZCZEGÓŁOWA INFORMACJA O ZWIERZĘTACH</h2>
          <!-- skrypt nr3 -->
          <?php
          $zapytanie = "SELECT `imie`,`telefon`,`szczepienie`,`opis` FROM `zwierzeta`";
          if ($rezultat = mysqli_query($polaczenie, $zapytanie)) {
            while($wiersz = mysqli_fetch_assoc($rezultat)){
              echo <<<WIERSZ
              Pacjent: $wiersz[imie], <br>
              Telefon właściciela: $wiersz[telefon],
              Ostatnie szczepienie: $wiersz[szczepienie],
              Informacje: $wiersz[opis]
              <hr>
WIERSZ;
            }
          }else{
            echo "Błędne połączenie";
          }
          mysqli_close($polaczenie);
          ?>
      </div>
      <div id="prawy">
          <h2>WETERYNARZ</h2>
          <a href="./logo-mini.jpg"><img src="./logo-mini.jpg" alt="logo"></a>
          <p>Krzysztof Nowakowski, lekarz weterynarii</p>
          <br>
          <br>
          <br>
          <h2>GODZINY PRZYJĘĆ</h2>
          <table>
            <tr>
              <td>Poniedziałek</td>
              <td>15:00 - 19:00</td>
            </tr>
            <tr>
              <td>Wtorek</td>
              <td>15:00 - 19:00</td>
            </tr>
          </table>
      </div>
  </body>
</html>
