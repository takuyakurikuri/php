<?php
function tri($first, $second)
{
    return $result = $first * $second / 2;
}

function box($first, $second)
{
    return $result = $first * $second;
}

function
trapezoid($first, $second)
{
    return $result = $first * $second;
}
$result1 = tri(4, 7);
$result2 = box(4, 7);
$result3 = trapezoid(4, 7);
echo $result1;
echo "<br>";
echo $result2;
echo "<br>";
echo $result3;