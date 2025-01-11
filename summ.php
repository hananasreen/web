<!DOCTYPE html>
<html lang="en"> 
<head> 
<meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title>Document</title> 
</head> 
<body style="background-color:burlywood;"> 
<h1 style="text-align: center;margin-top: 100px;color: black;">Sum of the Digits</h1><hr> 
<form style="text-align: center;" method="get" action=" "> 
<h3 style="color: rgb(170, 134, 91);">Enter Number..</h3> 
<input type="number"name="num" required> 
<button type="submit">Submit</button> 
</form> 

<?php 
if(isset($_GET['num'])){
$n=$_GET['num']; 
function sumofdigits($n)
{ 
$t=$n; 
$sum=0; 
while($n>0){ 
$sum+=$n%10; 
$n=(int)($n/10); 

} 
echo "sum of digits of $t is $sum"; 
} 
sumofdigits($n); 
}
?>
</body> 
</html>