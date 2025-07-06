<?php

    $x = 5;
    $i = 0;
    $j = 0;

    echo "Hollow Pattern Pattern :<br>";

    for($i=1; $i <=5; $i++)
    {
        for($j = 1; $j <= 5; $j++)
        {
            if($i == 1 ||  $j == 1 || $i == $x || $j == $x)
            {
                echo " * ";
            }
            else
            {
                echo "   ";
            }
        }
        echo"<br>";
    }

    echo"====================================";

?>