
<!DOCTYPE>
<html>
     <head>
    
         <title>
         Reusability</title>
    </head>
    <body>
    <?php 
        
    include 'UserDefinedFunctions.php';
    //include_once 'UserDefinedFunctions.php';
    //require 'UserDefinedFunctions.php';
    //require_once 'UserDefinedFunctions.php';
   
        Welcome();
        $foo = Addition_Using_Function_Parameter(10,5);
        echo $foo;
        ?>
    </body>
</html>