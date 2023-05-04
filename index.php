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
$size = 5;

// Downside pyramid
for ($i = 0; $i < $size; $i++) {
    // Printing spaces
    for ($j = 0; $j < $i; $j++) {
        echo "&nbsp;&nbsp;&nbsp;";
    }
    // Printing stars
    echo "*";
    for ($k = 0; $k < ($size - $i - 1) * 2; $k++) {
        echo "&nbsp;&nbsp;&nbsp;";
    }
    if ($i != $size - 1) { // Avoid printing an extra star on the last row
        echo "*";
    }
    echo "<br>";
}

// Upside-down pyramid
// for ($i = $size - 1; $i >= 0; $i--) {
//     // Printing spaces
//     for ($j = 0; $j < $i; $j++) {
//         echo "&nbsp;&nbsp;&nbsp;";
//     }
//     // Printing stars
//     echo "*";
//     for ($k = 0; $k < ($size - $i - 1) * 2; $k++) {
//         echo "&nbsp;&nbsp;&nbsp;";
//     }
//     if ($i != 5) { // Avoid printing an extra star on the first row
//         echo "*";
//     }
//     echo "<br>";
// }

for ($i = $size - 1; $i >= 0; $i--) {
    // Printing spaces
    for ($j = 0; $j < $i; $j++) {
        echo "&nbsp;&nbsp;&nbsp;";
    }
    // Printing stars
    if ($i != $size - 1) { // Avoid printing the first star on the first row
        echo "*";
    }
    for ($k = 0; $k < ($size - $i - 1) * 2; $k++) {
        echo "&nbsp;&nbsp;&nbsp;";
    }
    if ($i != 5) { // Avoid printing an extra star on the first row
        echo "*";
    }
    echo "<br>";
}

?>



<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>