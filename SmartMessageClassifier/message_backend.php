<?php
$info = $_POST['info'];
$escaped_info = escapeshellarg($info);

$python = "C:\\Users\\YATHARTH\\AppData\\Local\\Programs\\Python\\Python312\\python.exe";
$script = "C:\\Users\\YATHARTH\\Desktop\\FoodSaverProject\\message_gen.py";

$command = "$python $script $escaped_info 2>&1";
$message = shell_exec($command);

echo "<h2>Generated Smart Message</h2>";
echo "<p><strong>Input:</strong> $info</p>";
echo "<p><strong>Message:</strong> $message</p>";
?>
