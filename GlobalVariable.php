<!DOCTYPE>
<html>

    <head>
        <title>
            UserDefinedFunctions
        </title>
    </head>
    
    <body>
        
        <?php 
        $MyNumber = 4765;
        function Addition_Using_Function_Parameter($x,$y){
            global $MyNumber;
            $Result = $x + $y;
            echo "New Global addition is ".($MyNumber + $Result)." <br>";
            echo "addition using function parameter is {$Result} <br>";  
        }
        
        Addition_Using_Function_Parameter(7,6);
        ?>
    </body>
</html>