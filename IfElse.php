<!DOCTYPE>
<html>

    <head>
    <title>
        If Else
        </title>
    </head>
    
    <body>
    
<?php 
        $Weather = "Sunny1";
        
        if($Weather == "Sunny"){
            
            echo "Weatger isp;leasant <br>";
        }else{
            echo "Waetehr is not pleasabnt";
        }    
?><hr>

<?php 
        $Bought_Product = false;
        
        if($Bought_Product){
        
        echo "<h1>Thank you</h1>";
        echo "<p>Your product will  be dispathed soon.</p>";
        }
        else{
        echo "<h1>Please wait.</h1>";
        echo "<p>Your payment is processing.</p>";
        }
        ?>
    </body>
</html>