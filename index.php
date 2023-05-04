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
function printPyramid($size) {
    // Upside
    for ($i = 1; $i <= $size; $i++) {
        echo str_repeat("&nbsp;", ($size - $i)* 5); // print spaces
        echo "*"; // first star
        if ($i > 1) {
            //middle spaces and stars
            echo str_repeat("&nbsp;", ($i - 1) * 10 - 1); 
            echo "*";
        }
        echo "<br>";
    }

    // Downside 
    for ($i = $size - 1; $i > 0; $i--) {
        // print spaces
        echo str_repeat("&nbsp;", ($size - $i)* 5 - 1); 
        echo "*"; 
        if ($i > 1) {
            // middle spaces and stars
            echo str_repeat("&nbsp;", ($i - 1) * 10 - 1); 
            echo "*";
        }
        echo "<br>";
    }
}

$size = 4;

printPyramid($size);
printPyramid($size); 
?> 


<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>