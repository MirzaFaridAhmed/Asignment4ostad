<?php

$numbers = array(1, 2, 3, 4, 5);

$sum = 0;

foreach ($numbers as $number) {

if ($number % 2 == 0) {



continue;

}

$sum +== $number;

}

echo $sum;



?>