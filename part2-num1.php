</head>
<?php
$characters = range('a', 'k');
$table = array();

// Generate random characters and populate the table
for ($i = 0; $i < 4; $i++) {
    $row = array();
    for ($j = 0; $j < 5; $j++) {
        $row[] = $characters[rand(0, count($characters) - 1)];
    }
    $table[] = $row;
}

// Display the table
echo "<table>";
foreach ($table as $row) {
    echo "<tr>";
    foreach ($row as $key => $char) {
        $class = ($key % 2 == 0) ? 'even' : 'odd';
        echo "<td class=\"$class\">$char</td>";
    }
    echo "</tr>";
}
echo "</table>";

// CSS style to highlight even columns
echo "<style>";
echo "td.even { background-color: yellow; }";
echo "</style>";
?>