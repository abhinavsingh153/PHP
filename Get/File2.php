<!DOCTYPE html>
<html>

    <head>
    
        <title>URL</title>
    </head>
    
    <body>
    <pre>
    <?php
        print_r($_GET);
        $Name= $_GET['Name'];
        echo $Name."<br>";

 
        $Position= $_GET['Position'];
        echo $Position."<br>";
        
        ?>
            </pre>
    </body>
</html>