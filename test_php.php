<?php
$filename = "form_data.txt";
$message = "";
$dataList = [];
$showData = false; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);

    if (empty($name) || empty($email)) {
        $message = "Please fill in all fields.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "Invalid email format.";
    } else {
        $sanitizedName = htmlspecialchars($name);
        $sanitizedEmail = htmlspecialchars($email);

        $data = $sanitizedName . "|" . $sanitizedEmail . PHP_EOL;
        if (file_put_contents($filename, $data, FILE_APPEND | LOCK_EX)) {
            $message = "Data saved successfully!\n";
            $showData = true;
        } else {
            $message = "Error saving data.\n";
        }
    }
}

echo $message . "\n";

if (file_exists($filename)) {
    $file = fopen($filename, "r"); // Open file in read mode
    if ($file) {
        echo "Submitted Information:\n";
        while (($line = fgets($file)) !== false) {
            $parts = explode("|", trim($line)); // Trim and split by "|"
            if (count($parts) == 2) {
                echo "Name: " . htmlspecialchars($parts[0]) . " | Email: " . htmlspecialchars($parts[1]) . "\n";
            }
        }
        fclose($file); // Close the file after reading
    } else {
        echo "Could not open file for reading.\n";
    }
} else {
    echo "No data found.\n";
}