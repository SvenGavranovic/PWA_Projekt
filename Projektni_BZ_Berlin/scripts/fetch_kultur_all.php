<?php
ob_start();
include 'db_connect.php';
$query = "SELECT id, naslov, sazetak, image FROM news WHERE category='kultur' AND showOnPage=1 ORDER BY createdAt DESC";
$result = mysqli_query($connection, $query);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="news-item">';
        echo '<div class="img-div"><img src="' . $row['image'] . '" alt="' . $row['naslov'] . '"></div>';
        echo '<h2>' . $row['naslov'] . '</h2>';
        echo '<p>' . $row['sazetak'] . '</p>';
        echo '<a href="clanak.php?id=' . $row['id'] . '">Read more...</a>';
        echo '<form method="post" action="scripts/delete.php" onsubmit="return confirm(\'Are you sure you want to delete this article?\');">';
        echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
        echo '<button type="submit">Delete</button>';
        echo '</form>';
        echo '</div>';
    }
} else {
    echo '<p>No news available.</p>';
}

$html_output = ob_get_clean();
echo $html_output;
?>