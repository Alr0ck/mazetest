<?php

    $input = isset($_GET['input']) ? (int)$_GET['input'] : 15;
    
    $n = ($input + 1) / 4;
    if(!is_int($n) || (is_int($n) && $n <= 0)){
        echo "Input Pola Tidak Sesuai, (S = 4n - 1)";
    }
    else{
        generatePola($input);
    }

    function generatePola($input){
        $wall = "@";
        $road = " ";
        $flag = 0;
        
        echo "<table>";
        
        for($i=0;$i<$input;$i++){
            
            echo "<tr>";
            
            for($j=0;$j<$input;$j++){
                if($i%2 != 0){
                    if($j != 0 && $j != ($input-1)){
                        echo "<td>{$road}</td>";
                    }
                    else{
                        echo "<td>{$wall}</td>";
                    }
                }
                else{
                    if($flag%2 != 0 && $j == 1){
                        echo "<td>{$road}</td>";
                    }
                    else if($flag%2 == 0 && $j == ($input-2)){
                        echo "<td>{$road}</td>";
                    }
                    else {
                        echo "<td>{$wall}</td>";
                    }
                    $flag++;
                }
            }

            echo "</tr>";
        
        }
        
        echo "</table>";
    }

?>