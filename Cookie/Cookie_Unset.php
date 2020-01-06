<?php 
        
        $ExpireTime= time() + 86400 ;
        setcookie("Name" , "Abhinav", $ExpireTime);
        setcookie("Age","22", $ExpireTime);
        //print_r($_COOKIE)."<br>";
        $ExpireTime_Unset= time() - 86400;
        //setcookie("Name" , "Abhinav" , $ExpireTime_Unset);
        //setcookie("Name", null);
        setcookie("Name", "",$ExpireTime_Unset);
        
        if(isset($_COOKIE['Name'])){
            echo 'cookie is set with name of '.$_COOKIE['Name'];
        }
        else{
            echo 'cookie is not set';
        }
        
        ?>

<!DOCTYPE html>
<html>

    <head>
    
        <title>Cookie</title>
    </head>
    
    <body>
    
        
    </body>
</html>