<?php
$x = 3;
while ($x != 1) {
    echo $x . "<br>";
    if ($x % 2 == 0) {
        $x = $x / 2;
    } else {
        $x = 3 * $x + 1;
    }
}
echo $x;
?>