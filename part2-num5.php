<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $length = $_POST["length"];
  $width = $_POST["width"];

  // define consonant letters
  $consonants = array('B', 'C', 'D', 'F', 'G', 'H', 'J', 'K', 'L', 'M', 'N', 'P', 'Q', 'R', 'S', 'T', 'V', 'W', 'X', 'Y', 'Z');

  // generate grid with random consonant letters
  $grid = array();
  for ($i = 0; $i < $length; $i++) {
    $row = array();
    for ($j = 0; $j < $width; $j++) {
      $random_consonant = $consonants[array_rand($consonants)];
      $row[] = $random_consonant;
    }
    $grid[] = $row;
  }
}

?>



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
      5. Using a PHP POST method, ask the user to input 2 numbers
      </h3>
      <br>
      <ul>
        <li>Create a Grid using 2 inputs as the length and width.</li>
        <li>Insert random CONSONANT letters into the grid</li>
        <li>Display the grid in table</li>
      </ul>

    </nav>
  </header>

  <main>
    <div class="container part2Num1">
      <div class="row">
        <div class="col-md-6">
          <h1>Generate Grid with Random Consonant Letters</h1>
          <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
           <h6> Length:</h6><input type="text" name="length"><br>
            <h6>Width: </h6><input type="text" name="width"><br>
            <br>
            <input type="submit" name="submit" value="Generate Grid">
          </form>

          <?php if ($_SERVER["REQUEST_METHOD"] == "POST") : ?>
            <h2>Generated Grid:</h2>
            <table id="table-num5" border="1">
              <?php foreach ($grid as $row) : ?>
                <tr class="table-num5">
                  <?php foreach ($row as $letter) : ?>
                    <td class="table-num5"><?php echo $letter; ?></td>
                  <?php endforeach; ?>
                </tr class="table-num5">
              <?php endforeach; ?>
            </table>
          <?php endif; ?>

        </div>


        <div class="col-md-6">

          <h1>Code</h1>
          <textarea class="CodeMirror" id="code">
       
<!-- if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $length = $_POST["length"];
  $width = $_POST["width"];

  // define consonant letters
  $consonants = array('B', 'C', 'D', 'F', 'G', 'H', 'J', 'K', 'L', 'M', 'N', 'P', 'Q', 'R', 'S', 'T', 'V', 'W', 'X', 'Y', 'Z');

  // generate grid with random consonant letters
  $grid = array();
  for ($i = 0; $i < $length; $i++) {
    $row = array();
    for ($j = 0; $j < $width; $j++) {
      $random_consonant = $consonants[array_rand($consonants)];
      $row[] = $random_consonant;
    }
    $grid[] = $row;
  }
}
 -->

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