<!DOCTYPE html>
<html>

    <head>
    
        <title>Cookie</title>
    </head>
    
    <body>
    
        <?php 
        
        $ExpireTime= time() + 86400 ;
        setcookie("Name" , "Abhinav", $ExpireTime);
        setcookie("Age","22", $ExpireTime);
        //print_r($_COOKIE)."<br>";
        echo $_COOKIE['Name']."<br>";
        echo "My name is ".$_COOKIE['Name']."and my age is ".$_COOKIE['Age'];
        
        echo "<br>".$ExpireTime;
        
        ?>
    </body>
</html>