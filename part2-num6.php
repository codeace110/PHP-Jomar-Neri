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
            <h1>Part 2 </h1>
            <h3>
                6. Fix the code function to output the correct result. Explain your answer
            </h3>
            <br>


        </nav>
    </header>

    <main>
        <div class="container part2Num1">
            <div class="row">
                <div class="col-md-6">
                    <?php
                    function bubbleSort($lists)
                    {
                        $length = count($lists);
                        for ($parent = 0; $parent < $length; $parent++) {
                            for ($child = 0; $child < $length - $parent - 1; $child++) {
                                if ($lists[$child] > $lists[$child + 1]) {
                                    $temp = $lists[$child];
                                    $lists[$child] = $lists[$child + 1];
                                    $lists[$child + 1] = $temp;
                                }
                            }
                        }
                        return $lists;
                    }

                    // Example 
                    $numbers = [5, 2, 9, 1, 5, 6];
                    $sorted_numbers = bubbleSort($numbers);
                    ?>

                    <div id="explaination">
                        <img class="num6" src="./assets/img/tasknum6.png" alt="">
                        <h4>Explaination</h4>
                        <p>
                        The code above is an implementation of the bubble sort algorithm, 
                        which sorts an array by repeatedly swapping elements if 
                        they are in the wrong order.

                        However, there is an error in the swapping step. 
                        Instead of swapping the values of $lists[$child] and $lists[$child + 1], 
                        the code is swapping the value of $lists[$child + 1] with itself. 
                        This can be fixed by changing the second line in the if statement to:

                        $lists[$child + 1] = $lists[$child];
                        </p>
                    </div>
                </div>
                <div class="col-md-6">

                    <h1>Code</h1>
                    <textarea class="CodeMirror" id="code">
    <!-- function bubbleSort($lists)
    {
        $length = count($lists);
        for ($parent = 0; $parent < $length; $parent++) {
            for ($child = 0; $child < $length - $parent - 1; $child++) {
                if ($lists[$child] > $lists[$child + 1]) {
                    $temp = $lists[$child + 1];
                    $lists[$child + 1] = $lists[$child];
                    $lists[$child] = $temp;
                }
            }
        }
        return $lists;
    } -->
            </textarea>
                          <!-- Output container -->
                          <h5>OUTPUT</h5>
                          <div class="output-container">
                        <h2> Sorted Numbers:</h2>
                        <?php
                        // Output the sorted numbers inside the container
                        foreach ($sorted_numbers as $number) {
                            
                            
                            echo "<p class=\"sort_number\">$number</p>";
                        }
                        ?>
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