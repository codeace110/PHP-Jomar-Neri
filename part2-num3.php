<?php
$stack = array(); // Initialize an empty stack

if (isset($_POST['push'])) {
    $value = $_POST['value'];
    array_push($stack, $value); // Push the new value onto the stack
}

if (isset($_POST['pop'])) {
    $value = array_pop($stack); // Remove the top value from the stack
}

// Display the existing stack content
echo "Stack: ";
if (empty($stack)) {
    echo "empty";
} else {
    foreach ($stack as $value) {
        echo "$value ";
    }
}

// HTML form for input fields and buttons
echo "<form method=\"post\">";
echo "<input type=\"text\" name=\"value\">";
echo "<input type=\"submit\" name=\"push\" value=\"Push\">";
echo "<input type=\"submit\" name=\"pop\" value=\"Pop\">";
echo "</form>";
?>