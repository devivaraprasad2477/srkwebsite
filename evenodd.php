<!DOCTYPE html>
<html>
<body>
<form method="post">
<h4>Checking the number is even or odd </h4>
Enter a number:<input type="text" name="number" size="5"> <br/>
<input type="submit" value="submit">
</form> 

<?php
if($_POST)
{
	$number = $_POST['number'];
	echo "Entered Number is $number <br/>" ;
if(($number%2)==0)
{
	echo " $number is Even Number";
}
else
{
	echo "$number is Odd Number";
}
}
?>
</body>
</html>