<?php
$m=(int)$_GET['text_m'];
$n=(int)$_GET['text_n'];
$i=0;
while($i<$n){
  if(primeCheck($m)) {
    echo $m."<br>";
    $i++;
  }
  $m++;
}
function primeCheck($number){
  if ($number == 1)
    return 0;
  for ($i = 2; $i <= $number/2; $i++){
    if ($number % $i == 0)
      return 0;
  }
  return 1;
}

