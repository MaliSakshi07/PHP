<?php
    $num = 7;

    for($i = 2; $i < $num/2; $i++)
    {
        if($num % $i == 0)
        {
            break;
        }
    }

    if($num/2 == $i)
    {
        echo "\nGiven number is prime number.";
    }
    else
    {
        echo "\nGiven number is not prime number";
    }
?>