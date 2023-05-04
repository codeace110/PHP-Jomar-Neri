<?php

// initialize 4x4 array with zeros
$table = array(
    array(0, 0, 0, 0),
    array(0, 0, 0, 0),
    array(0, 0, 0, 0),
    array(0, 0, 0, 0)
);

// generate unique random numbers
$numbers = array();
while (count($numbers) < 16) {
    $num = rand(1, 100);
    if (!in_array($num, $numbers)) {
        $numbers[] = $num;
    }
}

// fill the table with the random numbers
for ($i = 0; $i < 16; $i++) {
    $row = floor($i / 4);
    $col = $i % 4;
    $table[$row][$col] = $numbers[$i];
}

// calculate row and column sums
$col_sums = array(0, 0, 0, 0);
$row_sums = array(0, 0, 0, 0);
for ($i = 0; $i < 4; $i++) {
    for ($j = 0; $j < 4; $j++) {
        $col_sums[$j] += $table[$i][$j];
        $row_sums[$i] += $table[$i][$j];
    }
}

// print the table
echo "<table border='1'>";
for ($i = 0; $i < 4; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 4; $j++) {
        $cell = $table[$i][$j];
        if ($j % 2 == 0) {
            echo "<td><b>$cell</b></td>";
        } else {
            echo "<td>$cell</td>";
        }
    }
    echo "<td>$row_sums[$i]</td>";
    echo "</tr>";
}
echo "<tr>";
for ($j = 0; $j < 4; $j++) {
    echo "<td>$col_sums[$j]</td>";
}
echo "<td>" . array_sum($numbers) . "</td>";
echo "</tr>";
echo "</table>";

?>