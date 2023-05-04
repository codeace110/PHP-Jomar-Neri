<?php
function printPyramid($size) {
    // Upside
    for ($i = 1; $i <= $size; $i++) {
         // print spaces
        echo str_repeat("&nbsp;", ($size - $i)* 5);
        // first star
        echo "*";
        if ($i > 1) {
            //middle spaces and stars
            echo str_repeat("&nbsp;", ($i - 1) * 10); 
            echo "*";
        }
        echo "<br>";
    }

    // Downside 
    for ($i = $size - 1; $i > 0; $i--) {
        // print spaces
        echo str_repeat("&nbsp;", ($size - $i)* 5); 
        echo "*"; 
        if ($i > 1) {
            // middle spaces and stars
            echo str_repeat("&nbsp;", ($i - 1) * 10); 
            echo "*";
        }
        echo "<br>";
    }
}

$size = 4;

printPyramid($size);
printPyramid($size); 
?> 
