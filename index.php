<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Slump</title>
    </head>
    <body>
        
        <form>
            <input type="text" name="textruta">
            <input type="submit">
        </form>
        
        <?php
        
        $storlek = $_GET["textruta"];

        
        
        $namn = array("Theochdor", "Truls", "Vilhelm", "Bengan", "Anders", "Martin", "Lars", "Erik", "Knut", "Gun");
        $size = sizeof($namn) - 1;
        $not_used = array("Theochdor", "Truls", "Vilhelm", "Bengan", "Anders", "Martin", "Lars", "Erik", "Knut", "Gun");
        $siffror = array(1,2,3,4,5,6,7,8,9,10);
        echo "<ol>";
        $i = intval($storlek);
        if(in_array($i, $siffror)){
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
        }
        else{
            echo $storlek . " är inte ett nummer mellan 1-10. skriv bra värde.";
        }
        
        echo "</ol>";
        ?>
    </body>
</html>
