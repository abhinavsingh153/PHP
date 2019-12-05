<!DOCTYPE>
<html> 
	<head>
		<title>Name</title>
		
		<body>
		
<?php ?>
<?php 

$FirstNumber = 3;
$SecondNumber = 4;
$ThirdNumber = 3.65478; 
?>
<br>

<?php echo $ThirdNumber+9-6?><br>
<?php echo 3.1/6 ?><br>
<?php echo 7/0 ?><br>


Ceiling: <?php echo ceil($ThirdNumber)?><br>
Floor : <?php echo floor($ThirdNumber)?><br>

<?php echo "is {$FirstNumber} : integer".is_int($FirstNumber);?><br>
<?php echo "is {$ThirdNumber} : integer".is_int($ThirdNumber);?><br>
<?php echo "is {$FirstNumber} : float".is_float($FirstNumber);?><br>
<?php echo "is {$ThirdNumber} : float".is_float($ThirdNumber);?><br>
<?php echo "is {$FirstNumber} : numeric".is_numeric($FirstNumber);?><br>
<?php echo "is {$ThirdNumber} : numeric".is_numeric($ThirdNumber);?><br>
Convert decimal number into binary : <?php echo decbin(3);?> <br>
binary to decimal : <?php echo bindec(11); ?> <br>
Square root : <?php echo sqrt(8);?><br>
Absolute value : <?php echo abs(-50+100);?><br>
Power : <?php echo pow(2,10); ?><br>
Mudulas : <?php echo fmod(15,7); ?><br>
Random : <?php echo rand(); ?><br>
Random eithi n 500 and 1000 : <?php echo rand(500,1000); ?><br>
<?php echo $SecondNumber= $SecondNumber+2; ?><br>
Increment : <?php $SecondNumber++; echo $SecondNumber; ?><br>
Decrement : <?php $SecondNumber--; echo $SecondNumber; ?> <br>
		
		</body>
	</head></html>