<!DOCTYPE>
	<html>
		<head>
		<title>ArrayFunctions</title>
		</head>
		
			<body>
			
<?php $Colors = array("Red", "Green" , "Blue");
array_pop($Colors);
array_push($Colors, "Black", "White", "Pink");
echo print_r($Colors);

 ?> <br>
 
 <?php $Numbers = array(13,54 ,6 ,89 , 100 , 19000 ,17); ?><br>
 Number if elements ina array : <?php echo count($Numbers) ; ?><br>
 Max : <?php Max($Numbers);?> <br>
 Min : <?php Min($Numbers);?> <br>
 If a number is present in array, Yes / No : <?php echo in_array(89,$Numbers); ?><br>
 Sort an array : <?php echo sort($Numbers);?><br>
 <?php echo print_r($Numbers);?><br>
 
 Resorting an array : <?php echo rsort($Numbers);?><br>
 <?php echo print_r($Numbers);?><br>
 
 Implode : <?php $Quote = array("Never", "Give", "Up", "In", "Life");?><br>
 <?php echo implode(" ", $Quote); ?><br>
 
 Explode : <?php $QuoteString = "Never Give Up In Life";
 print_r(explode(" ", $QuoteString)); ?>
			
			</body>
		
		
	</html>