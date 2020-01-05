<!DOCTYPE html>
<html>

    <head>
    
        <title>URL</title>
    </head>
    
    <body>
    <?php
        $Web="Google India";
        $Search="Abhinav online courses & web";
        $Result="https://".rawurlencode($Web)."?Search=".urlencode($Search);
        echo $Result."<br>";
            ?>
    </body>
</html>