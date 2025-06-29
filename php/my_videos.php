<?php
session_start();

// ✅ Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    // ✅ Not logged in → Redirect to login page
    header("Location: login.php");
    exit();
}

include "db.php";

// ✅ Get current logged-in user's ID
$userId = $_SESSION['user_id'];

// ✅ Fetch only this user's videos
$stmt = $conn->prepare("SELECT filename FROM videos WHERE user_id = ?");
$stmt->bind_param("i", $userId);
$stmt->execute();
$result = $stmt->get_result();

echo "<h2>Uploaded Videos</h2>";

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $filename = $row['filename'];
        echo "<div style='margin-bottom:20px;'>";
        echo "<p><strong>Filename:</strong> " . htmlspecialchars($filename) . "</p>";
        echo "<video width='480' height='360' controls>
                <source src='../uploads/" . htmlspecialchars($filename) . "' type='video/mp4'>
                Your browser does not support the video tag.
              </video>";
        echo "</div>";
    }
} else {
    echo "<p>No videos uploaded yet.</p>";
}

$stmt->close();
$conn->close();
?>


