<?php
    $n=$_REQUEST['n'];
    $c=$n;
    $s=0;
    #123=1^3+2^3+3^3 is called armstrong no
    for($i=0;$i<$c;$i++)
    {
        $m=$c%10;
        $s=$s+$m*$m*$m;
        $c=$c/10;
    }
    if($n==$s)
    echo "$s is a Armstrong number";
    else
    echo "$n is not Armstrong number";
    ?>