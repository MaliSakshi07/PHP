<?php
    $num = 153;
    $sum = 0;
    $temp = 0;

    $temp = $num;

    while($num != 0)
    {
        $rem = $num % 10;
        $sum += $rem*$rem*$rem;
        $num /= 10;
    }

    if($temp == $sum)
    {
        echo "Given number is Armstrong Number";
    }
    else
    {
         echo "Given number is Not Armstrong Number";
    }
?>