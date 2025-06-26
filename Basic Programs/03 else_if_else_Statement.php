<?php
    $age = 20;

    if($age >= 18)
    {
        echo"It's first time for voting.";
    }
    else if($age >= 45)
    {
        echo"candidate is eligible for voting.";
    }
    else
    {
        echo"candidate is not eligible for voting.";
    }
?>