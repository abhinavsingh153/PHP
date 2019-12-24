
<!DOCTYPE>
<html>
     <head>
    
         <title>
         Reusability</title>
    </head>
    <body>
    <?php 
        
        function NormalV(){
            $Value = 1;
            echo $Value."<br>";
            $Value++;
        }
        
        NormalV();
        NormalV();
        NormalV();
        NormalV();
        
        function StaticV(){
            
            static $Value = 1;
            echo $Value." static <br>";
            $Value++;
        }
        
        StaticV();
        StaticV();
        StaticV();
        StaticV();
        ?>
    </body>
</html>