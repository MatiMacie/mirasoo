<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="ogloszenia.css">
  </head>
  <body>
    <div id="banner">
      <h1>Portal ogłoszeniowy</h1>
    </div>
    <div id="lewy">
      <h2>Kategorie ogłoszeń: </h2>
        <ol>
          <li>książki</li>
          <li>muzyka</li>
          <li>filmy</li>
        </ol>
<table>
  <tr>
    <th>Imię</th>
    <th>Nazwisko</th>
    <th>Telefon</th>
    <th>Email </th>
  </tr>

<?php
    $polaczenie = @new mysqli('localhost','root','','ogloszenia');
    if(!$polaczenie->connect_errno){
      $zapytanie = "SELECT `id`,`imie`,`nazwisko`,`telefon`,`email` FROM `uzytkownik`";
      if($rezultat = $polaczenie->query($zapytanie)){
        while($wiersz = $rezultat->fetch_assoc()){
          echo <<<WIERSZ
          <tr>
              <td>$wiersz[imie]</td>
              <td>$wiersz[nazwisko]</td>
              <td>$wiersz[telefon]</td>
              <td>$wiersz[email]</td>
              <td><a href="./delete.php?usun=$wiersz[id]">USUŃ</a></td>
          </tr>
WIERSZ;
        }
      }
      else{
        echo "Błędne zapytanie";
      }
    }
    else{
      echo "błąd: $polaczenie->connect_errno";
    }

?>

</table>


        <img src="ksiazki.jpg" alt="kupie / sprzedam ksiazke" width="200px" height="300px">
        <table>
          <tr>
            <td>Liczba ogłoszeń</td>
            <td>Cena ogłoszenia</td>
            <td>Bonus</td>
          </tr>
          <tr>
            <td>1-10</td>
            <td>1 PLN</td>
            <td rowspan="3">Subskrybcja newslettera to upust 0,20PLN na głoszenie</td>
          </tr>
          <tr>,
            <td>11-50</td>
            <td>0,80PLN</td>
          </tr>
          <tr>
            <td>51 i więcej</td>
            <td>0,60PLN</td>
          </tr>
        </table>
    </div>
    <div id="prawy">
      <h2>Ogłoszenia kategorii książki</h2>
      <!-- baza joł nigga -->
      <?php
      $polaczenie = @new mysqli('localhost','root','','ogloszenia');

      if(!$polaczenie->connect_errno){
        //echo "Błąd: $polaczenie->connect_errno";

        $zapytanie = "SELECT `id`,`tytul`,`tresc` FROM `ogloszenie` WHERE `kategoria` = 1";

        if($rezultat = $polaczenie->query($zapytanie)){
          while($wiersz = $rezultat->fetch_assoc()){
            $zapytanie2 = "SELECT u.telefon FROM ogloszenie o INNER JOIN uzytkownik u ON u.id = o.uzytkownik_id WHERE $wiersz[id]";
            $rezultat2 = $polaczenie->query($zapytanie2);
            $wiersz2 = $rezultat2->fetch_assoc();
            echo <<<WIERSZ
            <h3>$wiersz[id] $wiersz[tytul]</h3>
            <p>$wiersz[tresc]</p>
WIERSZ;
          }
        }
        else{
          echo "Błędne zapytanie!";
        }
      }
        else{
          echo "Błąd: $polaczenie->connect_errno";
          //blad serwera - 2002

          //uzytkownik - 1044

          //haslo - 1045

          //baza - 1049


      }
       ?>
    </div>
    <div id="stopka">
      Portal ogłoszeniowy opracował: JA
    </div>
  </body>
</html>
