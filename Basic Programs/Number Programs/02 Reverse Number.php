<?php
    $num = 123;
    $rev = 0;
    $rem = 0;

    while($num > 0){
        $rem = $num%10;
        $rev = ($rev * 10) + $rem;
        $num = $num/10;
    }

    echo "Reverse Number = ", $rev;
?>