<!DOCTYPE html> 
<html lang="en"> 
<head> 
<meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title>Document</title> 
</head> 
<body></body> 
</html> 
<form action="prime.php" method="post"> 
Enter a number: <input type="text" name="num"> 
<input type="submit" name="submit" value="Check Prime"> 
</form> 
<?php 
if (isset($_POST['submit'])) { 
$num = $_POST['num']; 
if ($num > 1) { 
for ($i = 2; $i <= sqrt($num); $i++) { 
if ($num % $i == 0) { 
echo "$num is not a prime number."; 
break; 
} 
} 
if ($i > sqrt($num)) { 
echo "$num is a prime number."; 
} 
} else { 
echo "$num is not a prime number."; 
} 
} 