<?php 
    $A = array(5,4,12,7,15,9);
    unset($A[0]);
    $alength = count($A);
    $A = array_reverse($A);
    for($i=0;$i<=$alength;$i++) {
        echo $A[$i]."<br>";
    }

?>