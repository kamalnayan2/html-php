<?php
function pal($n){
    $temp=$n;
    $new=0;
    while($temp!=0){
        $d=$temp%10;
        $new=$new*10+$d;
        $temp=(int)$temp/10;
    }
    if($n== $new)
    return "YES";
    

}
echo pal(141);
?>