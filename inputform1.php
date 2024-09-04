<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>input</title>
</head>

<body>
    <form method="post">
        <label>enter the number</label>
        <input type="number">
    </form>

</body>

</html>

<?php
if($_POST)
{

    $n=$_POST[n];
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
}
    ?>