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
<html>
  <head>
    <title>Generate Grid with Random Consonant Letters</title>
  </head>
  <body>
    <h1>Generate Grid with Random Consonant Letters</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      Length: <input type="text" name="length"><br>
      Width: <input type="text" name="width"><br>
      <br>
      <input type="submit" name="submit" value="Generate Grid">
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST") : ?>
      <h2>Generated Grid:</h2>
      <table border="1">
        <?php foreach ($grid as $row) : ?>
          <tr>
            <?php foreach ($row as $letter) : ?>
              <td><?php echo $letter; ?></td>
            <?php endforeach; ?>
          </tr>
        <?php endforeach; ?>
      </table>
    <?php endif; ?>
  </body>
</html>