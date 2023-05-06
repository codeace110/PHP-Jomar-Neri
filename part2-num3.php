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
                            <h1>(odd/even column)</h1>
                        </thead>
                        <tbody>
                        <?php

// Generate 10 random integers to add to the stack
$stack = [1 , 2 , 3 , 4 ,5 ,6 ,7 ];


// Handle push operation
if (isset($_POST['push'])) {
    $value = $_POST['value'];
    array_unshift($stack, $value);
}

// Handle pop operation
if (isset($_POST['pop'])) {
    if (!empty($stack)) {
        array_shift($stack);
    }
}

// Display the stack
echo "<h2>Stack</h2>";
if (empty($stack)) {
    echo "<p>empty</p>";
} else {
    foreach ($stack as $value) {
        echo "<p>$value</p>";
    }
}

// Display the input form
echo "<form method=\"post\">";
echo "<input type=\"text\" name=\"value\">";
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
            $characters = range('a', 'k');
            shuffle($characters);
            $table = array();

            for ($i = 0; $i < 4; $i++) {
                $row = array();
                for ($j = 0; $j < 5; $j++) {
                    $row[] = $characters[$i * 2 + $j];
                }
                $table[] = $row;
            }

            // Display the table
            echo "<table class='table'>";
            foreach ($table as $row) {
                echo "<tr style='height: 70px;'>";
                foreach ($row as $key => $char) {
                    $class = ($key % 2 == 0) ? 'even' : 'odd';
                    echo "<td class=\"$class\" style='width: 70px; color:white;'>$char</td>";
                }
                echo "</tr>";
            }
            echo "</table>";

            echo "<style>";
            echo "td.even { background-color: rgb(62, 95, 10); }";
            echo "</style>";
            ?> -->
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