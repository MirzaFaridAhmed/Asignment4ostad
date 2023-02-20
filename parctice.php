<?php
// Outer loop handles number of rows
for ($i = 0; $i <=7; $i++) {

// inner loop handles number of columns
for($j = 0; $j<=$i; $j++)
{
// Print stars
// printf("%c ", $j+64);
  echo "$i " ;
}
// go to new line after each row pattern is printed
echo "\n";
 }

for ($i = 7; $i >=0; $i--) {

// inner loop handles number of columns
for($j = 1; $j<=$i; $j++)
{
// Print stars
// printf("%c ", $j+64);
  echo "$j " ;
}
// go to new line after each row pattern is printed
echo "\n";
 }


//Call function and send number of lines as parameter

?>