<?php
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id'])) {
    $id = intval($_POST['id']);
    
    // Prepare the delete statement
    $stmt = $connection->prepare("DELETE FROM news WHERE id = ?");
    $stmt->bind_param("i", $id);
    
    if ($stmt->execute()) {
        echo "Article deleted successfully.";
    } else {
        echo "Error deleting article: " . $connection->error;
    }
    
    $stmt->close();
    $connection->close();
    
    header("Location: ../naslovna.php");
    exit;
} else {
    echo "Invalid request.";
}
?>
