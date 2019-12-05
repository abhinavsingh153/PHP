<!DOCTYPE>
	<html>

		<head>
			<title>Arrays</title>
		</head>
		
		<body>
<?php
$name = array('abhi','abc','xyz');
echo $name[1];
?><br>

<?php $Food = array('Pizza', 'Fries', 15, 1 , array('French', 'Indian', 'German'),'Pasta'); ?>
<?php echo $Food[2]; ?><br>
<?php echo $Food[4][2]; ?><br>
<?php $Food[56] = "Mango"; ?><br>
<?php $Food[300] = "Apple"; ?><br>

<pre> 
<?php echo print_r($Food); ?>
</pre>
<br>

Associative Array : <?php $Color = array("A"=>40 , "B" => "Pizza");?>
<?php echo $Color["B"];?> <br>
<?php $Cuisine= array("Asian" => "Pizza" , "Italian" => "Biryani"); ?><br>
Associative array Concatenation : <?php echo $Cuisine["Asian"]. "is for ".$Cuisine["Italian"]; ?> <br>
<pre>
<?php echo print_r($Cuisine)?> 
</pre> 
<br>		
		</body>

	</html>