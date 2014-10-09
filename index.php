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
        if(isset($_GET["textruta"])){
        
        
        $storlek = $_GET["textruta"];
        
        $namn = array("Theochdor", "Truls", "Vilhelm", "Bengan", "Anders", "Martin", "Lars", "Erik", "Knut", "Gun");
        
        function slumpa($nummer, $array){
            $size = sizeof($array) - 1;
            shuffle($array);
            $i = 10;
            while($i - $nummer > 0){
                $slump = rand(0, $size);
                array_splice($array, $slump, 1);
                $i --;
                $size --;
            }
               return $array;
        }
        
        
        if($storlek <= 10 and $storlek > 0){
        function skriv_ut($array){
            echo '<ol>';
            foreach($array as $name){
                echo "<li>" . $name . "</li>";
            }
            echo '</ol>';
        }
        
        $slumpad_array = slumpa($storlek, $namn);
        skriv_ut($slumpad_array);
        }
        else{
            echo "Du har gjort fel, din fuling! Var vänlig skriv in ett tal mellan 1-10, dumfan!";
        }
        }
        ?>
    </body>
</html>