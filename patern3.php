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
                PATTERN Task 3
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
                        $size = 5;

                        // Print top half of the pattern
                        for ($i = 1; $i <= $size; $i++) {
                            for ($j = 1; $j <= $i; $j++) {
                                echo $i * $j . " ";
                            }
                            echo "<br>";
                        }

                        // Print bottom half of the pattern
                        for ($i = $size - 1; $i >= 1; $i--) {
                            for ($j = 1; $j <= $i; $j++) {
                                echo $i * $j . " ";
                            }
                            echo "<br>";
                        }
                        ?>


                    </div>
                </div>
                <div class="col-md-6">

                    <h1>Code</h1>
                    <textarea class="CodeMirror" id="code">

<!--                    
$size = 5;

// Print top half of the pattern
for ($i = 1; $i <= $size; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $i * $j . " ";
    }
    echo "<br>";
}

// Print bottom half of the pattern
for ($i = $size - 1; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo $i * $j . " ";
    }
    echo "<br>";
} -->

                    </textarea>
                </div>
            </div>
        </div>
        </div>
    </main>
    <!-- Bootstrap JS and Bundle CDN links -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/codemirror@5.63.1/lib/codemirror.js"></script>
    <script>
        var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
            lineNumbers: true,
            mode: "application/x-httpd-php",
            matchBrackets: true,
            viewportMargin: Infinity,
            lineWrapping: true,
            maxLineLength: 80,
            theme: "darcula"
        });
    </script>

</body>

</html>