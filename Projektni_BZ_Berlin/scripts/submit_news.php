<?php
include 'db_connect.php';
$naslov = $_POST['naslov'];
$sazetak = $_POST['sazetak'];
$glavniTekst = $_POST['glavniTekst'];
$category = $_POST['category'];
$showOnPage = isset($_POST['show']) ? 1 : 0;


$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
$image = substr($target_file, 3);

$stmt = $connection->prepare("INSERT INTO news (naslov, sazetak, glavniTekst, category, `image`, showOnPage) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssi", $naslov, $sazetak, $glavniTekst, $category, $image, $showOnPage);

$check = getimagesize($_FILES["image"]["tmp_name"]);
if($check !== false) {
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        if ($stmt->execute()) {
            echo "New record created successfully";
            echo '<br/><a  href="../administracija.php"><button>Return</button></a>';
        } else {
            echo "Error: " . $stmt->error;
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
} else {
    echo "File is not an image.";
    exit;
}

$stmt->close();
?>