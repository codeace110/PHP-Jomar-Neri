<?php
$queue = array();

if (isset($_POST['push'])) {
  $value = $_POST['value'];
  array_push($queue, $value);
}

if (isset($_POST['pop'])) {
  if (!empty($queue)) {
    array_shift($queue);
  }
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Queue Example</title>
</head>
<body>

<h1>Queue Example</h1>

<form method="post">
  <label for="value">Enter a value:</label>
  <input type="text" name="value" id="value">
  <button type="submit" name="push">Push</button>
  <button type="submit" name="pop">Pop</button>
</form>

<h2>Current Queue:</h2>
<ul>
<?php foreach ($queue as $value): ?>
  <li><?= $value ?></li>
<?php endforeach; ?>
</ul>

</body>
</html>