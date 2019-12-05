<!DOCTYPE>
	<html>
	
		<head> 
		<title> Inside Job | Pointers </title>
		</head>
		
		<body>

<?php 
$Numbers = array(45, 78 ,19, 5 , 100 ,24, 823);
print_r($Numbers);
?><hr>

<?php 
echo current($Numbers)."<br>";
next($Numbers);
echo current($Numbers)."<br>";
next($Numbers);
echo current($Numbers)."<br>";
next($Numbers);
next($Numbers);
echo current($Numbers)."<br>";

reset($Numbers);
echo current($Numbers)."<br>";

end($Numbers);
echo current($Numbers);

next($Numbers);
echo current($Numbers);

?>

		</body>
	
	
	</html>