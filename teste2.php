<?php

function oddOrEven(int $number) {
  return $number % 2 == 0;
}

$numbers = array();
$total_even = 0;

echo "Enter an integer (or type 'q' to quit):\n";

while (true) {
  $input = trim(fgets(STDIN));
  
  if ($input == 'q') {
    break;
  }
  
  if (is_numeric($input)) {
    $number = intval($input);
    if ($number > 0) {
      array_push($numbers, $number);
    }
  }
}

foreach ($nums as $num) {
  if (is_even($num)) {
    $total_even += 1;
  }
}

echo "The total number of even numbers in the array is: " . $total_even . "\n";

?>