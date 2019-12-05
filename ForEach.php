<!DOCTYPE>
<html>

    <head>
    <title>ForEach Loop</title></head>

    <body>
    
    <?php $Numbers= array(10,24,25,26,78,90);
        
        foreach($Numbers as $Num){
            echo "Numbers:  {$Num} <br> ";
        }
        ?><hr>
        
        <?php 
        
        $Food = array("Item_number"=>2050,
                     "Name"=> "Pizza",
                     "region"=>"Italy",
                     "side_food"=> "Pasta",
                     "drink"=>"cook",
                     "package_price"=>12000);
        
        foreach($Food as $Key=>$Value){
            echo "{$Key} : {$Value} <br>";
        }
        ?>
    </body>
</html>