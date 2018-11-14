<?php
//tablice indekowane numerycznie

  $kolory = array('biały','czerwony', 'zielony' );

  echo 'Początkowa zawartość tablicy:<br>';
function wypisz($kolory){
  for($i=0; $i<count($kolory);$i++){
    $element = $i +1;
    echo "element $element: $kolory[$i]<br>";
  }
}
  wypisz($kolory);

  //**************************************************
  //Tablice asocjacyjne

  $dane = array(
    'imie' => "Janusz",
    'nazwisko'=> "Nowak",
    'wiek' => 20,
    'narodowosc' => "Polska"
  );
  echo "<hr> zawartość tablicy o nazwie \$dane:<br>";

  echo <<<TABLICA
  Imię: $dane[imie]<br>
  Nazwisko: {$dane['nazwisko']}<br>
  Wiek: $dane[wiek]<br>
  Narodowość: $dane[narodowosc]<hr>
TABLICA;

  //**************************************************
  //tablica foreach

    foreach ($dane as $war) {
      echo "Wartość: $war<br>";
    }
    echo '<hr>';

    foreach ($dane as $klucz => $war) {
      echo "Klucz: $war <br>";
    }
    echo '<hr>';

    //**************************************************
    //Tablice wielowymiarowe

    $uczen = array(
      array("Janusz", "Kowal", 20),
      array("Marek", "Nowak", 20),
      array("Jula", "Tomczak", 18)
    );

    for ($i=0; $i < count($uczen) ; $i++) {
      for ($j=0; $j < count($uczen[$i]); $j++) {
        //echo $uczen[$i][$j];
        echo "{$uczen[$i][$j]}";
      }
      echo "<br>";
    }

    echo '<hr>';

    foreach ($uczen as $klucz => $tablica) {
      foreach ($tablica as $klucz2 => $war) {
        //echo $uczen[$klucz][$klucz2];
        echo $war;
      }
      echo "<br>";
    }




      $cyfry = array(
        array(1,2,3,4),
        array(5,6,7),
        array(8),
        array(9,10,11)
      );

      foreach ($cyfry as $klucz => $tablica) {
        foreach ($tablica as $klucz2 => $war) {
        echo $war." ";
      }
      echo "<br>";
    }
    echo "<hr>";

    //**************************************************
    //sortowanie

    $tab = array(10,1,5,88,-5,101);

    function wyswietl($tab){
      foreach ($tab as $x) {
        echo "$x ";
      }
      echo "<br>";
    }
    wyswietl($tab);

    echo "<hr>";

    //sortowanie rosnące
    sort($tab);
    wyswietl($tab);
    echo "<br>";
    //sortowanie malejące
    rsort($tab);
    wyswietl($tab);
    echo "<br>";
    //**************************************************
    $tab1 = array("Julia", "anna", "zenon", "Krystek");

    wyswietl($tab1);
    sort($tab1);
    wyswietl($tab1);

    echo "<hr>";
    //**************************************************
    $tab2 = array("Julia", "anna", "zenon", "krystian");

    wyswietl($tab2);
    foreach ($tab2 as $key => $x) {
      $x = mb_strtolower($x);
      $tab2[$key] = $x;
    }
    wyswietl($tab2);
    sort($tab2);
    wyswietl($tab2);

    foreach ($tab2 as $key => $x) {
      $x = ucwords($x);
      $tab2[$key] = $x;
    }
    wyswietl($tab2);

    //*****************************************
    //Sortowanie tab asocjacyjnej

    $tabAsoc = array(
      'imie'=>"Andrzej",
      'pseudonim'=>"22promil",
      'wiek'=>21,
      'nazwisko'=>"Kowal"
    );

    wyswietl($tabAsoc);

    //sortowanie według zawartości

    asort($tabAsoc);
    wyswietl($tabAsoc);

    echo gettype($tabAsoc['pseudonim'])."<br>";
    echo gettype($tabAsoc['wiek']);

    echo "<hr>";

    arsort($tabAsoc);

    wyswietl($tabAsoc);


    //sortowanie według klucza
    ksort($tabAsoc);

    wyswietl($tabAsoc);

    krsort($tabAsoc);

    wyswietl($tabAsoc);


    //wyswietlanie danych z tablicy

    echo "<hr>";

    var_dump($tabAsoc);

    echo "<br>";

    print_r($tabAsoc);

    echo "<pre>";
      print_r($tabAsoc);
    echo "</pre>";

    echo "<hr>";

    //***************************************************************

    $liczby = range(0,10);
    echo "<pre>";
    print_r($liczby);
    echo "</pre> <br>";
    wyswietl($liczby);

    echo "<hr>";

    $liczby1 = range(2,15,2);
    echo "<pre>";
    print_r($liczby1);
    echo "</pre> <br>";

    echo "<hr>";

    $tekst = range('a','k');
    echo "<pre>";
    print_r($tekst);
    echo "</pre> <br>";

    echo "<hr>";

    $tekst1 = range('a','k',2);
    echo "<pre>";
    print_r($tekst1);
    echo "</pre> <br>";

    //shuffle

    $liczby2 = range(1,30);
    shuffle($liczby2);
    foreach ($liczby2 as $x) {
      echo "$x ";
    }

    echo "<hr>";

    //**************************************************

    //Zadanie domowe:
    //Utwórz tablice 3wymiarową i napisz dla niej funkcję
    //wyświetlającą zawartość. Wykorzystaj pętlę foreach.


    $zd = array(
      array(
        array(1,2,5,8),
        array(2,8,3,1),
        array('Doberek', 'Super', 'Zadanko')
      )
    );

    foreach ($zd as $key => $value) {
      foreach ($value as $key1 => $value1) {
        foreach ($value1 as $key2 => $value2) {
              echo $value2;
        }echo "<br>";
      }
    }
    //**************************************************

    //losowanie $liczb
    $x = rand(1,10);
    echo $x;
?>
