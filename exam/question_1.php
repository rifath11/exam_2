<?php
$number = [1, 2, 3, 4, 5];

function square($n) {
    return $n * $n;
}
$squared_numbers = array_map('square', $number);

print_r($squared_numbers);