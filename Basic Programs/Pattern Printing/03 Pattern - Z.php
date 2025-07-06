<?php
    $x = 5;

    echo "Pattern For Z :<br>";

    for($i = 1; $i <= $x; $i++)
    {
        for($j = 1; $j <= $x; $j++)
        {
            if($i == 1 || $i == $x || $i+$j == $x+1)
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
?>