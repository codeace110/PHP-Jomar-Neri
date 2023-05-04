<?php
$size = 6;
$factor = 2;

for ($i = 1; $i <= $size; $i++) {
    $current = $i;

    for ($j = 1; $j <= $size; $j++) {
        echo $current . " ";
       
        $current *= $factor + $j - 1;
    }
    echo "<br>";
}
?>