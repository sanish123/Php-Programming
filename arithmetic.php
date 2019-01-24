<<!DOCTYPE html>
<html>
<head>

    <title>Testing Arithmetic Opertors</title>

</head>
<body>
    <center><h3 style="color:blue">Testing Arithmetic Opertors</h3></center>
        <?php
        function addition($i,$j){
            $sum= $i+$j;
            echo "<p> The sum of $i and $j is: $sum<p>";
        }
        $a=25;
        $b=75;
        addition($a,$b);
	function subtraction($c,$d)
		$diff=$c-$d;
		echo "<p> The difference of $c and $d is: $diff <p>"
}
	$e=23;
	$f=24;
	subtraction($e,$f);
?>
</body>
</html>
