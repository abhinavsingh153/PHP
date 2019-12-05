<!DOCTYPE>

<html> 
	<head>
		<title>Name</title>
	</head>
	<body>
	
<?php 

$phrase1="student who come late";
$phrase2 = "in class sit in the last with Rock";
$combine = $phrase1;
$combine .= $phrase2;
echo "original full string : $combine <br>"
?><hr>
Uppercase first:<?php echo ucfirst($combine);?><br>
Uppercase words:<?php echo ucwords($combine); ?><br>
Lowercase: <?php echo strtolower($combine); ?><br>
Uppercase: <?php echo strtoupper($combine); ?><br>
<hr>

Repeat:<?php echo str_repeat($combine, 3); ?><br>
Make substring from one point to another :<?php echo substr($combine,5,10)?><br>
Find position of any specific word: <?php echo strpos($combine ,"come"); ?><br>
Find character : <?php echo strchr($combine, "R")?><br>
<hr>

Total length of string: <?php echo strlen($combine)?><br>
Trim: <?php echo "A".trim(" B C D ")."E"?><br>
Find specific and show after: <?php echo strstr($combine , "come"); ?><br>
Replace word with new : <?php echo str_replace("sit", "stand",$combine); ?> <br>


	
<?php 

echo "My name is Abhinav Singh <br>";
echo 'My age is 24 <br>';
$color = "red";
$shirt = "sleeve_less";
$combination = $color." ".$shirt;
echo $combination;
?>	

<?php 

echo "$color is my favourite <br>";
echo "{$color} is my favourite <br>";
//echo '$color <br>';
?>
	
	</body>
</html>