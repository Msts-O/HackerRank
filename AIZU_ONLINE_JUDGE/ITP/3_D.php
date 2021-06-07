<?php
  list($a, $b, $c) = explode(" ", trim(fgets(STDIN)));
  $count = 0;
  for ($i = $a; $i <= $b; $i++) {
    if ($c % $i == 0) {
      $count++;
    }
  }
  print $count;
?>
