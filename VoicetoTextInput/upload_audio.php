<?php
if ($_FILES['audio']['error'] == 0) {
    $uploadDir = "uploads/";
    $filePath = $uploadDir . basename($_FILES['audio']['name']);

    if (!file_exists($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    move_uploaded_file($_FILES['audio']['tmp_name'], $filePath);

    // Call local Python Whisper script
    $python = "C:\\Users\\YATHARTH\\AppData\\Local\\Programs\\Python\\Python312\\python.exe";
    $script = "C:\\Users\\YATHARTH\\Desktop\\FoodSaverProject\\transcribe.py";
    $escapedPath = escapeshellarg($filePath);
    $command = "$python $script $escapedPath 2>&1";

    $output = shell_exec($command);
    echo $output;
} else {
    echo "Audio upload failed.";
}
?>

