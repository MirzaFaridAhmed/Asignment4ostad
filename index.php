<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php echo 
      
      <?php
function print_pattern($num)
{
// Outer loop handles number of rows
for ($i = 0; $i < $num; $i++)
{
// inner loop handles number of columns
for($j = 0; $j <= $i; $j++ )
{
// Print stars
echo "* ";
}
// go to new line after each row pattern is printed
echo "\n";
}
}
//Call function and send number of lines as parameter
$num = 5;
print_pattern($num);
?>
      
      
      
      '<p>Hello World</p>'; ?> 

    <!--
    This script places a badge on your repl's full-browser view back to your repl's cover
    page. Try various colors for the theme: dark, light, red, orange, yellow, lime, green,
    teal, blue, blurple, magenta, pink!
    -->
    <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script> 
  </body>
</html>