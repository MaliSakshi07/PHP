<?php
    $num = 4;
    $fact = 1;

    for($i = $num; $i >= 1; $i--)
    {
        $fact = $fact * $i;
    }

    echo "factorial of 4 = ", $fact;
?> 
