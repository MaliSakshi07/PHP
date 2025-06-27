<?php
    $No = 1321;
    $rev = 0;
    $temp = 0;
    $rem = 0;

    $temp = $No;

    while($No != 0)
    {
        $rem = $No % 10;
        $rev = $rev * 10 + $rem;
        $No = $No / 10;
    }
    if($temp == $rev)
    {
        echo "Given Number is Pallindrome.";
    }
    else
    {
        echo "Given Number is Not Pallindrome.";
    }
?>