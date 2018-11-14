<?php
  //data
  echo date("Y"),"<br>"; //2018
  echo date("y"),"<br>";//18
  echo date("Y-m-d"),"<br>"; //2018-09-19
  echo date("Y-M-d"),"<br>"; //2018-Sep-19
  echo date("Y-M-D"),"<br>"; //2018-Sep-Wed
  echo date("e"),"<br>"; //Europe/Berlin
  echo date("F"),"<br>"; //September
  echo "<hr>";

  //czas

  echo date("g"),"<br>"; // 2 format 12 godz bez zera
  echo date("G"),"<br>"; // 14 format 24 godz bez zera
  echo date("h"),"<br>"; // 02 format 12 godz z zerem na pocz
  echo date("H"),"<br>"; // 14 format 24 godz z zerem na pocz

  echo "<hr>";

  echo date("i"),"<br>"; // liczba minut z zerem na pocz
  echo date("I"),"<br>"; // 1 czas letni(1) lub zimowy(0)

  echo "<hr>";

  echo date("j"),"<br>"; // 19 dzień miesiąca bez zera

  echo "<hr>";

  echo date("l"),"<br>"; // Wednesday dzień tygodnia
  echo date("L"),"<br>"; // 0 znacznik roku przestępnego

  echo "<hr>";

  echo date("m"),"<br>"; // 09 miesiąc z zerem na pocz
  echo date("n"),"<br>"; // 9 miesiąc bez zera

  echo "<hr>";

  echo date("O"),"<br>"; // +0200 różnica do czasu Greenwich
  echo date("o"),"<br>"; // 2018
  echo date("P"),"<br>"; // +02:00 różnica do czasu Greenwich

  echo "<hr>";

  echo date("s"),"<br>"; //sekundy
  echo date("S"),"<br>"; //th w kolejności dzień tygodnia
  echo date("t"),"<br>"; //30 liczba dni miesiąca

  echo "<hr>";

  echo date("T"),'<br>'; //CEST strefa czasowa

  echo "<hr>";

  echo date("U"),'<br>'; //1537360544 znacznik czasu unixa

  echo "<hr>";

  echo date("w"),'<br>'; //3 dzień tygodnia
  echo date("W"),'<br>'; //38 tydzień w roku
  echo date("z"),'<br>'; //261 dzień w roku (BŁOND bo trza +1)

  echo "<hr>";
  //*****************************************************
  //getdate
  $data = getdate();

  $dzien = $data['mday']; //19 dzień miesiąca
  $miesiac = $data['mon']; //9 miesiąc (1-12)
  $rok = $data['year']; //2018 rok

  echo "$dzien-$miesiac-$rok";

  echo "<hr>";

  $dzientyg = $data['wday']; //3 dzien tygodnia (0-6), 0-niedziela
  $dzienroku = $data['yday'] +1; //262 dzień roku

  echo $dzienroku;

  echo "<hr>";

  $dzientygo = $data['weekday']; //Wednesday dzień tygodnia
  $miesiac1 = $data['month']; //September miesiąc
  $znacznik = $data['0']; //c znacznik czasu unixa

  switch ($miesiac){
    case 1:
      $miesiac = "styczeń";
      break;
    case 2:
      $miesiac = "luty";
      break;
    case 3:
      $miesiac = "marzec";
      break;
    case 4:
      $miesiac = "kwiecień";
      break;
    case 5:
      $miesiac = "maj";
      break;
    case 6:
      $miesiac = "czerwiec";
      break;
    case 7:
      $miesiac = "lipiec";
      break;
    case 8:
      $miesiac = "sierpień";
      break;
    case 9:
      $miesiac = "wrzesień";
      break;
    case 10:
      $miesiac = "październik";
      break;
    case 11:
      $miesiac = "listopad";
      break;
    case 12:
      $miesiac = "grudzień";
      break;
  }
  switch ($dzientygo){
    case 0:
      $dzientygo = "niedziela";
      break;
    case 1:
      $dzientygo = "poniedziałek";
      break;
    case 2:
      $dzientygo = "wtorek";
      break;
    case 3:
      $dzientygo = "środa";
      break;
    case 4:
      $dzientygo = "czwartek";
      break;
    case 5:
      $dzientygo = "piątek";
      break;
    case 6:
      $dzientygo = "sobota";
      break;
    }

    echo "$dzien,$miesiac,$rok, $dzientygo"; //19 wrzesień 2018, środa
    echo "<br>";
    echo "dzień roku: $dzienroku, $dzientygo, $miesiac1, $znacznik";
    echo "<br>";

    //*******************************************************************
    //znacznik czasu
    $r1=2018;
    $m1=9;
    $d1=19;

    $r2=2018;
    $m2=9;
    $d2=19;

    $czas =  mktime(0,0,0,$m1,$d1,$r1);
        //godzina, minuta, sekunda, dzień, miesiąc, rok
    $czas1 =  mktime(0,0,0,$m2,$d2,$r2);

    $czas2 = abs($czas1-$czas);
    $dni = $czas/(60*60*25);
    $lata = floor($dni/365);

    echo "Ilość sekund: $czas, Ilość dni: $dni, Ilość lat: $lata";

    //*****************************************************************
    //strtotime()
    $data =  mktime(); // aktualny znacznik czasu
    echo $data,"<br>";
    echo $dataDziesiejsza = strtotime("now"),"<br>";
    echo $dataUrodzenia = strtotime("3 march 1999"),"<br>";

    $szymon = abs($dataDziesiejsza - $dataUrodzenia);
    echo $szymon,"<br>";

    $dziesiecDniWstecz = strtotime("-10 day");
    echo $dziesiecDniWstecz,"<br>";

    $wczoraj = strtotime("yesterday");
    echo $wczoraj,"<br>";

    $nastepnyweekend = strtotime("next week");
    echo $nastepnyweekend,"<br>";

    $jutro = strtotime("tomorrow");
    echo $jutro,"<br>";

    $przyszlosc = strtotime("+10 day 8 hours 40 minutes 15 seconds");
    echo $przyszlosc,"<br>";

    //zaddom
    //ile sekund ma jeden $dzien
    $dzisiaj = strtotime("today");
    $dzienSekundy = $jutro - $dzisiaj;
    echo $dzienSekundy;
?>
