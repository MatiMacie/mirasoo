<?php
if(isset($_COOKIE['wiek'])){
  require_once('./naglowek.html');
  echo "Wiek: ",$_COOKIE['wiek'];
  require_once('./stopka.html');
}
  if (empty($_GET['wiek'])){
    require_once('./naglowek.html');
    require_once('./form.html');
    require_once('./stopka.html');
  }elseif (!empty($_GET['wiek'])){
      setcookie('wiek',$_GET['wiek'],time()+60*60*24*3);
      require_once('naglowek.html');
        echo "<p>Dziękujemy za podanie danych</p>";
        echo "<p><a href=\"./usunwiek.php?usun=\">Powrot do formularza</a></p>";
      require_once('stopka.html');
    }

  if(isset($_GET['cookie']) && $_GET['cookie']==1){
    echo "<span style=\"color:red\"> usunięto ciasteczko wiek</span>";
  }
  ?>
