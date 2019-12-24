<!DOCTYPE>
<html>

    <head>
        <title>
            SuperGlobalVariable
        </title>
    </head>
    
    <body>
        
        <?php 
                
        $x= 75;
        $y =25;
        
        function addition(){
            
            $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
        }
        
        addition();
        print_r($GLOBALS);
        echo "<br>";
        echo $z;
        
        ?>
    </body>
</html>