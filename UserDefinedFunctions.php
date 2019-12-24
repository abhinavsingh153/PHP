<!DOCTYPE>
<html>

    <head>
        <title>
            UserDefinedFunctions
        </title>
    </head>
    
    <body>
        
        <?php 
            
        function Welcome(){
            echo "Welcome to PHP <br>";
        }
        
        function Addition_Using_Function_Parameter($x,$y){
            $Result = $x + $y;
            echo "addition using function parameter is {$Result} <br>";  
        }
        ?>
    </body>
</html>