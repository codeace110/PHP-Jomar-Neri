<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/codemirror@5.63.1/lib/codemirror.css" />
    <link rel="stylesheet" href="style.css">
    <title>Part2--1</title>
</head>
<style>

</style>

<body>
    <a href="./index.php"><button class="homeBtn">Home</button></a>
    <header>
        <nav class="nav">
            <h1>Part 1 </h1>
            <h3>
                PATTERN Task1
            </h3>
            <br>


        </nav>
    </header>

    <main>
        <div class="container part2Num1">
            <div class="row">
                <div class="col-md-6">
                    <div class="pattern">
                        <?php
                        function printPyramid($size)
                        {
                            // Upside
                            for ($i = 1; $i <= $size; $i++) {
                                // print spaces
                                echo str_repeat("&nbsp;", ($size - $i) * 5);
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
                            for ($i = $size -1; $i > 0; $i--) {
                                // print spaces
                                echo str_repeat("&nbsp;", ($size - $i) * 5);
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


                    </div>
                </div>
                <div class="col-md-6">

                    <h1>Code</h1>
                    <textarea class="CodeMirror" id="code">
                    
<!-- function printPyramid($size)
{
    // Upside
    for ($i = 1; $i <= $size; $i++) {
        // print spaces
        echo str_repeat("&nbsp;", ($size - $i) * 5);
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
        echo str_repeat("&nbsp;", ($size - $i) * 5);
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
    -->

                    </textarea>
                </div>
            </div>
        </div>
        </div>
    </main>
    <!-- Bootstrap JS and Bundle CDN links -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/codemirror@5.63.1/lib/codemirror.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/codemirror@5.63.1/mode/clike/clike.js"></script>
    <script>
        var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
            lineNumbers: true,
            maxLineLength: 80,
            mode: "application/x-httpd-php-open",
            theme: "default",
            mode: "clike"
        });
    </script>

</body>

</html>