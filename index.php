<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <form>
            <input type="text" name="textruta">
            <input type="submit">
        </form>
        
        <?php
        
        $namn = array("Theochdor", "Truls", "Vilhelm","Bengan","Anders","Martin");
        $size = sizeof($namn) - 1;
        $not_used = array("Theochdor", "Truls", "Vilhelm","Bengan","Anders","Martin");
        $i = $size + 1;
        echo "<ol>";
        while($i > 0){
            
            $slump = rand(0, $size);
            if(in_array($namn[$slump], $not_used)){
                echo "<li>".$namn[$slump]."</li>".'<br>';
                unset($not_used[$slump]);
                $i--;
            }
            else{
                
            }
        }
        echo "</ol>";
        ?>
    </body>
</html>
