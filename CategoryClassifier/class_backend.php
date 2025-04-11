<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

$desc = $_POST['desc'];
$quantity = $_POST['quantity'];
$location = $_POST['location'];


$escaped_desc = escapeshellarg($desc);
$python = "C:\\Users\\YATHARTH\\AppData\\Local\\Programs\\Python\\Python312\\python.exe";
$script = "C:\\Users\\YATHARTH\\Desktop\\FoodSaverProject\\classifier.py";

$command = "$python $script $escaped_desc 2>&1";

$category = shell_exec($command);

echo "<h2>Thank you for your donation!</h2>";
echo "<p><strong>Food Description:</strong> $desc</p>";
echo "<p><strong>Quantity:</strong> $quantity</p>";
echo "<p><strong>Location:</strong> $location</p>";
echo "<p><strong>Predicted Food Category:</strong> $category</p>";
?>
