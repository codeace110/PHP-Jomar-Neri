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
$size = 4;

// Upside pyramid
for ($i = 1; $i <= $size; $i++) {
    echo str_repeat("&nbsp;", $size - $i); // print spaces
    echo "*"; // print first star
    if ($i > 1) {
        echo str_repeat("&nbsp;", ($i - 1) * 2 - 1); // print middle spaces and stars
        echo "*";
    }
    echo "<br>";
}

// Downside pyramid
for ($i = $size - 1; $i > 0; $i--) {
    echo str_repeat("&nbsp;", $size - $i); // print spaces
    echo "*"; // print first star
    if ($i > 1) {
        echo str_repeat("&nbsp;", ($i - 1) * 2 - 1); // print middle spaces and stars
        echo "*";
    }
    echo "<br>";
}


// Upside pyramid
for ($i = 1; $i <= $size; $i++) {
    echo str_repeat("&nbsp;", $size - $i); // print spaces
    echo "*"; // print first star
    if ($i > 1) {
        echo str_repeat("&nbsp;", ($i - 1) * 2 - 1); // print middle spaces and stars
        echo "*";
    }
    echo "<br>";
}

// Downside pyramid
for ($i = $size - 1; $i > 0; $i--) {
    echo str_repeat("&nbsp;", $size - $i); // print spaces
    echo "*"; // print first star
    if ($i > 1) {
        echo str_repeat("&nbsp;", ($i - 1) * 2 - 1); // print middle spaces and stars
        echo "*";
    }
    echo "<br>";
}

?>



<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>