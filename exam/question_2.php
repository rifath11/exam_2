<?php
$number = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

function Even($n) {
    //return $n % 2 === 0;
      return !($n & 1);
}

$even_numbers = array_filter($number, 'Even');

print_r($even_numbers);
