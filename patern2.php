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