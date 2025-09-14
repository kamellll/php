<?php
$a = 7;
$result = $a == 7 ? "TRUE<br/>" : "FALSE<br/>";
echo $result;
$num = 0;
do {
    echo 'num = ' . $num . '<br/>';
    $num += 1;
} while ($num < 3);