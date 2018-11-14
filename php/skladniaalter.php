<?php
  //instrukcja if

  $x=4;
  $y=5;
  if($x>$y){
    echo "zmienna x jest większa od zmiennej y";
  }

  if($x>$y):
    echo "zmienna x jest większa od zmiennej y";
  endif;

  $test = ($x < $y)? "x jest mniejsze od y" : "x nie jest mniejsza od y";
  echo $test,"<br>";
/*  if ($x>$y):
    // code...
    else
    // code...
  endif;

  if ($x>$y):
    // code...
  elseif ($x<$y) :
    // code...
  else ($x=$y) :
    // code...
  endif;

  //instrukcja switch

  switch ($x) :
    case 'value':
      // code...
      break;

    default:
      // code...
      break;
  endswitch;
*/
  //pętle

  for ($i=0; $i < 4; $i++) {
    // code...
  };
  for ($i=0; $i < 4; $i++):
    // code...
  endfor;

  $a = 5;
  while ($a++ <= 10) :
    // code...
  endwhile;

  //break

  for ($i=0; ; $i++) :
    echo "Zmienna",' $i ',"wynosi $i <br>";
      if ($i==5) :
        break;
      endif;
  endfor;

  for ($i=0; $i < 10; $i++):
    if($i % 2 !=0):
      continue;
    endif;
    echo "$i ";
  endfor;

  ?>
