<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $namn = array("Theochdor", "Truls", "Vilhelm","Bengan","Anders","Martin");
        $size = sizeof($namn) - 1;
        $not_used = array("Theochdor", "Truls", "Vilhelm","Bengan","Anders","Martin");
        $i = $size + 1;
        while($i > 0){
            
            $slump = rand(0, $size);
            if(in_array($namn[$slump], $not_used)){
                echo $namn[$slump].'<br>';
                unset($not_used[$slump]);
                $i--;
            }
            else{
                
            }
        }
        
        
        ?>
    </body>
</html>
