<?php
$a=readline("enter the number");
for($i=1;$i<=$a;$i++){
    for($j=1;$j<=$a-$i;$j++){
        echo "   ";
    }
    for($j=1;$j<=2*$i-1;$j++){
        
            echo "*"."  ";
        
    }
    echo "\n";
    
}

