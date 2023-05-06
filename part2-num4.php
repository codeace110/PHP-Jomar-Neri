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
        4. Create a queue of integers using arrays (first in first out )
      </h3>
      <br>
      <ul>
        <li>create input fields and push a button to insert a new value</li>
        <li>Create a pop button to remove the old value</li>
        <li>Always display the existing queue content</li>
        <li>Do not use pre-defined PHP array function like array_pop</li>
      </ul>

    </nav>
  </header>

  <main>

    <div class="container part2Num1">
      <div class="row">
        <div class="col-md-6">
          <?php
          session_start();

          if (!isset($_SESSION['queue'])) {
            $_SESSION['queue'] = array();
          }

          if (isset($_POST['push'])) {
            $value = $_POST['value'];
            array_push($_SESSION['queue'], $value);
          }

          if (isset($_POST['pop'])) {
            if (!empty($_SESSION['queue'])) {
              array_shift($_SESSION['queue']);
            }
          }

          $queue = $_SESSION['queue'];

          ?>

          <div class="col-md-6">
            <h1>Queue Example</h1>

            <form method="post">
              <label for="value">Enter a value:</label>
              <input type="text" name="value" id="value">
              <button type="submit" name="push">Push</button>
              <button type="submit" name="pop">Pop</button>
            </form>

            <h2>Current Queue:</h2>
            <ul id="queue">
              <?php foreach ($queue as $value) : ?>
                <li><?= $value ?></li>
              <?php endforeach; ?>
            </ul>

          </div>


        </div>

        <div class="col-md-6">

          <h1>Code</h1>
          <textarea class="CodeMirror" id="code">
<!-- 
             
session_start();

if (!isset($_SESSION['queue'])) {
  $_SESSION['queue'] = array();
}

if (isset($_POST['push'])) {
  $value = $_POST['value'];
  array_push($_SESSION['queue'], $value);
}

if (isset($_POST['pop'])) {
  if (!empty($_SESSION['queue'])) {
    array_shift($_SESSION['queue']);
  }
}

$queue = $_SESSION['queue'];

      

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