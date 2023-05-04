<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <title>Jomar Neri</title>
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

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>