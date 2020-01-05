<!DOCTYPE html>
<html>

    <head>
    
        <title>URL</title>
    </head>
    
    <body>
    <?php $Name = "Alex Moore";
        $Position = "Support coordinator & manager"?>
        
        <a href = "File2.php?Name=<?php echo $Name; ?>">Click</a><br>
        <a href = "File2.php?Name=<?php echo $Name; ?>&<?php echo $Position?>">Click2</a><br>
        <a href = "File2.php?Name=<?php echo $Name; ?>&Position=<?php echo urlencode($Position)?>">Click3</a>
    </body>
</html>