<?php
  function pole ($a,$b){
      return $a*$b;
  }

  $pole = pole(3.333, 4);

echo $pole,"cm<sup>2</sup><hr>";

  function wartosc($a)
  {
    if ($a<0){
      return "Ujemna";
    }elseif ($a>0){
      return "Dodatnia";
    }else return "Zero";
  }
  $ile = wartosc(2.25);
  echo gettype($ile),"<hr>"; //string

  function podajWartosc($x):int{
    return $x+$x;
  }

  $podaj = podajWartosc(4.999);
  echo $podaj,"<hr>"; //9

  //zasięg zmiennych
    $x = 20;

  function wyswietl(){
    echo "Wartość zmiennej \$x wynosi: ";
    echo $GLOBALS['x'],"<br>";
  }

  wyswietl();

  //******************************************
  $y = 10;

  function wyswietlY(){
    global $y;
    echo "Wartość zmiennej \$x wynosi: $y";
  }

  wyswietlY();

  //******************************************

  function suma(){
    $liczba =5;
    $liczba +=3;
    echo "<br>\$liczba wynosi: $liczba";
  }

  suma();

  //******************************************

  function suma1(){
    static $liczba =5;
    $liczba +=3;
    echo "<br>\$liczba wynosi: $liczba";
  }

  suma1();
  suma1();
  echo "<hr>";
  //argumenty

  function dodaj($x, $y = 3){
    return $x + $y;
  }

  $z = 13;

  $liczba = dodaj ($z, 6);
  echo $liczba; //19
  echo "<hr>";

  $liczba1 = dodaj(3,4);
  echo $liczba1; //7
  echo "<hr>";

  $liczba2 = dodaj(2);
  echo $liczba2; //15
  echo "<hr>";

//********************************************

//argumenty i typy danych

  function mnozenie(float $x, int $y){
    return $x * $y;
  }

  echo mnozenie(2,5); //10
  echo "<hr>";
  echo mnozenie(3.5,2); //7
  echo "<hr>";
  echo mnozenie(2.5,2,5); //5
  echo "<hr>";
?>
