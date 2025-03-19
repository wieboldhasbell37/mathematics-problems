  <?php
    $number = mt_rand(1, 10);
    $result = 0;
    for ($i = 1; $i <= $number; $i++) {
      $result += $i;
    }
    echo $result;
  ?>