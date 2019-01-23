<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<fieldset>
	<legend> Calculator </legend>
	<form method="POST" action="calculator.php">
	First Number<input type="number" name="First_number"><br>
	Second Number<input type="number" name="Second_number"><br>
	<select name="option">
		<option  value="add">add</option>
		<option  value="sub">sub</option>
		<option  value="mul">mul</option>
		<option  value="div">div</option>
	</select><br><br>
		<input type="submit" name="submit" value="calculate">
</form>
</fieldset>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
if(isset($_POST["submit"]))
{
	$num1=$_POST["First_number"];
	$num2=$_POST["Second_number"];
	$operator=$_POST["option"];

	switch ($operator)
		{
			case 'add':
			$add=$num1+$num2;
			echo"addition is:".$add;
			break;

			case 'sub':
			$sub=$num1-$num2;
			echo"subtraction is:".$sub;
			break;

			case 'mul':
			$mul=$num1*$num2;
			echo"mulplication is:".$mul;
			break;

			case 'div':
			$div=$num1/$num2;
			echo"division is:".$div;
			break;

		
		}
	}
		
?>