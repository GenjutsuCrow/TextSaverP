<?php


$a = (int)readline('Enter an integer: '); 
  
// $b = 9.78 


   
// Input 10 20 
list($var1, $var2)  
        = explode(' ', readline()); 
   
// Typecasting to integers 
$var1 = (int)$var1; 
$var2 = (int)$var2; 
   
// Printing the sum of var1 and var2. 
// The sum of 10 and 20 is 30 
echo "The sum of " . $var1 . " and "
    . $var2 . " is " . ($var1 + $var2); 
