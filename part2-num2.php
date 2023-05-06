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
    <header>
        <nav class="nav">

            <h1>Part 2 </h1>
            <h3>
                2. Manipulation of multidimensional array
            </h3>
            <br>
            <ul>
                <li>Generate a random number from 1 - 100</li>
                <li>The number generated should always be unique</li>
                <li>Sum up the number per column and row</li>
            </ul>

        </nav>
    </header>

    <main>
        <div class="container part2Num1">
            <div class="row">
                <div class="col-md-6">
                    <table class="table">
                        <thead>
                            <h1>column and row</h1>
                        </thead>
                        <tbody>
                            <?php

                            // Initialize 4x4 array with zeros
                            $table = array(
                                array(0, 0, 0, 0),
                                array(0, 0, 0, 0),
                                array(0, 0, 0, 0),
                                array(0, 0, 0, 0)
                            );

                            // Generate unique random numbers
                            $numbers = array();
                            while (count($numbers) < 16) {
                                $num = rand(1, 100);
                                if (!in_array($num, $numbers)) {
                                    $numbers[] = $num;
                                }
                            }

                            // Fill the table with the random numbers
                            for ($i = 0; $i < 16; $i++) {
                                $row = floor($i / 4);
                                $col = $i % 4;
                                $table[$row][$col] = $numbers[$i];
                            }

                            // Calculate row and column sums
                            $col_sums = array(0, 0, 0, 0);
                            $row_sums = array(0, 0, 0, 0);
                            for ($i = 0; $i < 4; $i++) {
                                for ($j = 0; $j < 4; $j++) {
                                    $col_sums[$j] += $table[$i][$j];
                                    $row_sums[$i] += $table[$i][$j];
                                }
                            }
                            $total_sum = array_sum($numbers);

                            // Print the table with CSS styling and padding
                            echo "<style>
                        table {
                        border-collapse: collapse;
                        width: 240px;
                        }
                        td {
                        border: 1px solid black;
                        width: 100px;
                        height: 70px;
                        text-align: center;
                        padding: 5px;
                        }
                        </style>";
                            echo "<table class='table-borderless'>";
                            for ($i = 0; $i < 4; $i++) {
                                echo "<tr>";
                                for ($j = 0; $j < 4; $j++) {
                                    $cell = $table[$i][$j];
                                    echo "<td>$cell</td>";
                                }
                                echo "<td class='table-borderless-left'>$row_sums[$i]</td>";
                                echo "</tr>";
                            }
                            echo "<tr >";
                            for ($j = 0; $j < 4; $j++) {
                                echo "<td class='table-borderless'>$col_sums[$j]</td>";
                            }
                            echo "</tr>";
                            echo "</table>";

                            ?>


                        </tbody>
                    </table>
                </div>
                <div class="col-md-6">

                    <h1>Code</h1>
                    <textarea class="CodeMirror" id="code">

<!--            
                     
                    // Initialize 4x4 array with zeros
                    $table = array(
                        array(0, 0, 0, 0),
                        array(0, 0, 0, 0),
                        array(0, 0, 0, 0),
                        array(0, 0, 0, 0)
                    );

                    // Generate unique random numbers
                    $numbers = array();
                    while (count($numbers) < 16) {
                        $num = rand(1, 100);
                        if (!in_array($num, $numbers)) {
                            $numbers[] = $num;
                        }
                    }

                    // Fill the table with the random numbers
                    for ($i = 0; $i < 16; $i++) {
                        $row = floor($i / 4);
                        $col = $i % 4;
                        $table[$row][$col] = $numbers[$i];
                    }

                    // Calculate row and column sums
                    $col_sums = array(0, 0, 0, 0);
                    $row_sums = array(0, 0, 0, 0);
                    for ($i = 0; $i < 4; $i++) {
                        for ($j = 0; $j < 4; $j++) {
                            $col_sums[$j] += $table[$i][$j];
                            $row_sums[$i] += $table[$i][$j];
                        }
                    }
                    $total_sum = array_sum($numbers);

                    // Print the table with CSS styling and padding
                    echo "<style>
                    table {
                    border-collapse: collapse;
                    width: 240px;
                    }
                    td {
                    border: 1px solid black;
                    width: 100px;
                    height: 70px;
                    text-align: center;
                    padding: 5px;
                    }
                    </style>";
                    echo "<table class='table-borderless'>";
                    for ($i = 0; $i < 4; $i++) {
                        echo "<tr>";
                        for ($j = 0; $j < 4; $j++) {
                            $cell = $table[$i][$j];
                            echo "<td>$cell</td>";
                        }
                        echo "<td class='table-borderless-left'>$row_sums[$i]</td>";
                        echo "</tr>";
                    }
                    echo "<tr >";
                    for ($j = 0; $j < 4; $j++) {
                        echo "<td class='table-borderless'>$col_sums[$j]</td>";
                    }
                    echo "</tr>";
                    echo "</table>"; -->

              

                    </textarea>
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