
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

if($_Server["REQUEST_METHOD"]=="POST"){

    $num=$_POST["TestNumber"];
    IsPrime($num);

}
function IsPrime($num){
    $count=0;
    for($i=2; $i<$num/2; $i++){
        if($num%$i==0){
            $count++;
            break;
        }
        else{
            continue;
        }
    }
    if($num=="0" || $num=="1"){
        echo "<br>neither prime nor composit";

    }
    elseif($count==1){
        echo "<br>number is composit";
    }
    else{
        echo "<br>number is prime";
    }
}
  
// This code is contributed by Sam007 
?> 



<?php


function mul($a, $b) {
	return $a * $b;
}



?>
