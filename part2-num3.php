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
                3. Create a stack of integers using arrays( First in last out )
            </h3>
            <br>
            <ul>
                <li>create input fields and push a button to insert a new value</li>
                <li>Create a pop button to remove the top value</li>
                <li>Always display the existing stack content</li>
                <li>Do not use pre-defined PHP array functions like array_pop</li>
            </ul>

        </nav>
    </header>

    <main>
        <div class="container part2Num1">
            <div class="row">
                <div class="col-md-6">
                    <table class="table">
                        <thead>
                            <h1>arrays( First in last out )</h1>
                        </thead>
                        <tbody>
                            <?php
                            // Initialize the stack
                            session_start();
                            if (!isset($_SESSION['stack'])) {
                                $_SESSION['stack'] = array();
                            }
                            $stack = $_SESSION['stack'];

                            // Handle push operation
                            if (isset($_POST['push'])) {
                                $value = $_POST['value'];
                                $stack[] = $value; // Add the new value to the end of the array
                                $_SESSION['stack'] = $stack; // Store the updated stack in the session
                            }

                            // Handle pop operation
                            if (isset($_POST['pop'])) {
                                if (count($stack) > 0) {
                                    $value = $stack[count($stack) - 1]; // Get the last element
                                    unset($stack[count($stack) - 1]); // Remove the last element
                                    $_SESSION['stack'] = $stack; // Store the updated stack in the session
                                }
                            }

                            // Display the stack
                            echo "<h2>Stack</h2>";
                            if (empty($stack)) {
                                echo "<p>empty</p>";
                            } else {
                                echo "<div id=\"stack\">";
                                foreach ($stack as $value) {
                                    echo "<p>$value</p>";
                                }
                                echo "</div>";
                            }

                            // Display the input form
                            echo "<form method=\"post\">";
                            echo "<input type=\"number\" name=\"value\">";
                            echo "<input type=\"submit\" name=\"push\" value=\"Push\">";
                            echo "<input type=\"submit\" name=\"pop\" value=\"Pop\">";
                            echo "</form>";
                            ?>

                        </tbody>
                    </table>
                </div>

                <div class="col-md-6">

                    <h1>Code</h1>
                    <textarea class="CodeMirror" id="code">
<!-- 
    // Initialize the stack
    session_start();
    if (!isset($_SESSION['stack'])) {
        $_SESSION['stack'] = array();
    }
    $stack = $_SESSION['stack'];

    // Handle push operation
    if (isset($_POST['push'])) {
        $value = $_POST['value'];
        $stack[] = $value; // Add the new value to the end of the array
        $_SESSION['stack'] = $stack; // Store the updated stack in the session
    }

    // Handle pop operation
    if (isset($_POST['pop'])) {
        if (count($stack) > 0) {
            $value = $stack[count($stack) - 1]; // Get the last element
            unset($stack[count($stack) - 1]); // Remove the last element
            $_SESSION['stack'] = $stack; // Store the updated stack in the session
        }
    }

    // Display the stack
    echo "<h2>Stack</h2>";
    if (empty($stack)) {
        echo "<p>empty</p>";
    } else {
        echo "<div id=\"stack\">";
        foreach ($stack as $value) {
            echo "<p>$value</p>";
        }
        echo "</div>";
    }

    // Display the input form
    echo "<form method=\"post\">";
    echo "<input type=\"number\" name=\"value\">";
    echo "<input type=\"submit\" name=\"push\" value=\"Push\">";
    echo "<input type=\"submit\" name=\"pop\" value=\"Pop\">";
    echo "</form>";
-->
                   </textarea>
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