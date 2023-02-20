<?php
// 1. Write a PHP function to sort an array of strings by their length, in ascending order. (Hint: You can use the usort() function to define a custom sorting function.)


function sort_strings_by_length($arr) {
    usort($arr, function($a, $b) {
        return strlen($a) - strlen($b);
    });
    return $arr;
}


$arr = array("blueberries","apple", "banana", "cherry", "date", "elderberry",);
$sorted_arr = sort_strings_by_length($arr);
print_r($sorted_arr);
// 2.Write a PHP function to concatenate two strings, but with the second string starting from the end of the first string

function concat_reverse($string1, $string2) {
  $length1 = strlen($string1);
  $length2 = strlen($string2);
  $result = $string1;
echo "\n";
  echo "\n";
  // Iterate through the second string from end to start
  for ($i = $length2 - 1; $i >= 0; $i--) {
    $result .= $string2[$i];
  }

  return $result;
}


$string1 = "hello";
$string2 = "world";
$result = concat_reverse($string1, $string2);
echo $result; // Output: hellodlrow

echo "\n";
echo "\n";
// 3.Write a PHP function to remove the first and last element from an array and return the remaining elements as a new array.

function removeFirstAndLast($arr) {
  return array_slice($arr, 1, -1);
}


$arr = array(1, 2, 3, 4, 5);
$newArr = removeFirstAndLast($arr);
print_r($newArr);
// 4.Write a PHP function to check if a string contains only letters and whitespace.

function contains_only_letters_and_whitespace($str) {
    return preg_match('/^[a-zA-Z\s]+$/', $str);
    
  }
  

  $input = "Hello world   ";
  $output = contains_only_letters_and_whitespace($input);
  echo "Input string: " . $input . "\n";
  echo "Output: " . $output . "\n";

  $output={}

  

// 5.Write a PHP function to find the second largest number in an array of numbers.
function findSecondLargest($arr) {
  // Initialize variables
  $largest = $arr[0];
  $secondLargest = $arr[0];

  // Loop through the array
  foreach ($arr as $num) {
    // If the current number is greater than the largest number
    // set the second largest number to the current largest
    // and update the largest number to the current number
    if ($num > $largest) {
      $secondLargest = $largest;
      $largest = $num;
    } 
    // If the current number is not greater than the largest number
    // but is greater than the second largest number
    // update the second largest number to the current number
    else if ($num != $largest && $num > $secondLargest) {
      $secondLargest = $num;
    }
  }

  // Return the second largest number
  return $secondLargest;
}
$myArray = array(5, 2, 8, 3, 9, 6,10,100);
echo findSecondLargest($myArray); // Output: 10


//myphpmypc

?>

