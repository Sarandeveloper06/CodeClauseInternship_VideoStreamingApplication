<?php
session_start();
include "db.php";

if (!isset($_SESSION['user_id'])) {
    die("You must be logged in to upload videos.");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['video'])) {
    $targetDir = "../uploads/";
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0777, true);
    }

    $fileName = basename($_FILES['video']['name']);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    $allowedTypes = array('mp4', 'avi', 'mov', 'mkv');

    if (in_array(strtolower($fileType), $allowedTypes)) {
        if (move_uploaded_file($_FILES['video']['tmp_name'], $targetFilePath)) {
            $userId = $_SESSION['user_id'];
            $stmt = $conn->prepare("INSERT INTO videos (user_id, filename) VALUES (?, ?)");
            $stmt->bind_param("is", $userId, $fileName);

            if ($stmt->execute()) {
                echo "Video uploaded successfully.";
            } else {
                echo "Database insert error: " . $stmt->error;
            }
            $stmt->close();
        } else {
            echo "Error uploading file.";
        }
    } else {
        echo "Invalid file format. Allowed: mp4, avi, mov, mkv.";
    }
} else {
    die("Invalid request or no file uploaded.");
}

$conn->close();
?>
