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
function printPyramid($size)
{
    // Downside 
    // Downside 
    for ($i = $size - 0; $i > 0; $i--) {
        // print spaces
        echo str_repeat("&nbsp;", ($size - $i) * 5);
        // print number or star
        if ($i == 1) {
            echo "1";
        } else if ($i % 2 == 0) {
            echo "*";
        } else {
            echo "$i";
        }
        if ($i > 1) {
            // middle spaces and stars
            echo str_repeat("&nbsp;", ($i - 1) * 10);
            // print number or star
            if ($i % 2 == 0) {
                echo "*";
            } else {
                echo "$i";
            }
        }
        echo "<br>";
    }

    // Upside
    for ($i = 2; $i <= $size; $i++) {
        // print spaces
        echo str_repeat("&nbsp;", ($size - $i) * 5);
        // first digit
        if ($i % 2 == 1) {
            echo "$i";
        } else {
            echo "*";
        }
        if ($i % 2 == 1) {
            //middle spaces and stars
            echo str_repeat("&nbsp;", ($i - 1) * 10);
            echo "$i";
        }  else {
            echo str_repeat("&nbsp;", ($i - 1) * 10);
            echo "*";
        }
        echo "<br>";
    }
}

$size = 5;

printPyramid($size);

?>



<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>