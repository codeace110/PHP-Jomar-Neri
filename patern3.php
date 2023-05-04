<?php
$size = 5;

// Print top half of the pattern
for ($i = 1; $i <= $size; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $i * $j . " ";
    }
    echo "<br>";
}

// Print bottom half of the pattern
for ($i = $size - 1; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo $i * $j . " ";
    }
    echo "<br>";
}
?>
