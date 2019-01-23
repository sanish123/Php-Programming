
<?php 
// PHP program to find sum of first 
// n natural numbers. 
  
// Returns sum of first n natural 
// numbers 
function findSum($n) 
{ 
$sum = 0; 
for ($x = 1; $x <= $n; $x++)  
    $sum = $sum + $x; 
return $sum; 
} 
  
// Driver code 
$n = 5; 
echo findSum($n); 
  
// This code is contributed by Sam007 
?> 
