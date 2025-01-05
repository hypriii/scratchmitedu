<?php
// Directory to list files from
$directory = "./"; // Current directory

// Get all files in the directory
$files = scandir($directory);

// Filter out '.' and '..'
$files = array_diff($files, array('.', '..'));

// Check if there are any files in the directory
if (count($files) > 0) {
    echo "<ul>";
    foreach ($files as $file) {
        echo "<li>" . htmlspecialchars($file) . "</li>";
    }
    echo "</ul>";
} else {
    echo "No files found.";
}
?>

