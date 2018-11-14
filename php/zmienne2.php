<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
  /*  $a =1.0;
    $b =1;
    if($a==$b){
      echo "rowne<br>";
    }else {
      echo "rozne<br>";
    }
    if($a===$b){
      echo "identiko<br>";
    }else {
      echo "nieidentiko<br>";
    }
    echo gettype($a),"<br>";
    echo gettype($b),"<br>";
    //**************************
    echo "<hr>";
    $x = 2;
    echo $x++;
    echo ++$x;
    echo $x;
    $y = $x++;
    echo $y;
    $y = ++$x;
    echo $y;
    echo ++$y;
    echo "<hr>";
    //******************************************
    $tekst1 = "4dssd";
    $tekst2 = "drugi tekst";
    $tekst3 = "7";
    $liczba = 14;
    $j = -1;
    $c =100;
    //operatory rzutowania bool, int, float, string, array, object, unset
    $dwa = (int)$tekst1;
    echo $dwa; //4
    $trzy = (int)$tekst3;
    echo $trzy; //7
    $jot = (bool)$j;
    echo $jot; //1
    $ce = (unset)$c;
    echo $ce; //nic nie wyswietla
    echo gettype($ce); //null
    $text = (int)$tekst2;
    echo $text; //0
    $liczba1 = (float)$liczba;
    echo $liczba1; //14
    echo gettype($liczba1); //double
    //rozmiar typu integer
    echo "<hr>";
    echo PHP_INT_SIZE; //4
    echo "<hr>";
    //kontrola typu zmiennych
    $test = "szkola";
    $x = 10;
    $a = 20.5;
    $y = true;
    $z = null;
    $w;
    echo gettype($test); //string
    echo gettype($x); //int
    echo gettype($a); //duble
    echo gettype($y); //boolean
    echo gettype($z); //null
    //echo gettype($w); //Undefined variable: NULL
    echo @gettype($w); //Undefined variable: NULL
    echo is_string($test); //1
    echo is_string($x); //0 (nic)
    echo is_bool($a); //0 (nic)
    echo is_bool($y); // 1
    echo is_float($a); //1
    echo is_int($x); //1
    echo is_int($test); //0 (nic)
    echo @is_null($w); //1
    echo "<hr>";
    //zmienne super globalne $_GET $_POST $_COOKIE $_FILES $_SESSION
    echo $_SERVER['SERVER_PORT'],"<br>"; //80
    echo $_SERVER['SCRIPT_NAME'],"<br>"; //localhost
    echo $_SERVER['SERVER_PROTOCOL']; //HTTP 1.1
    echo $_SERVER['DOCUMENT_ROOT']; //xampp//htdocs
    echo "<br>";
    $lokalPliku = $_SERVER['DOCUMENT_ROOT'];
    $lokalPliku .= $_SERVER['SCRIPT_NAME'];
    echo $lokalPliku,"<hr>";
    //stale
    //nazwy z duzych liter byki
    //define('NAZWISKO', 'Kowal');
    //echo NAZWISKO; //kowal
    //NAZWISKO = "nowa"; //syntax error eunexpected '='
*/
    define('WIEK', 20, true);
    echo wiek;//nie sprawdza wielkosci liter (true)
    define('PI', 3,14159265359);
    echo PI."<hr>";
    //**************************************
    //stałe predefiniowane
    echo PHP_VERSION; //
    $ver= PHP_VERSION;
    if($ver > 7.1){
      echo "Nowa wersja PHP <br>";
    }else {
      echo "stara wersja PHP <br>";
    }

    echo PHP_OS; //WINNT
    echo __LINE__; //143
    echo __FILE__; //
    echo __DIR__;
    ?>
  </body>
</html>
