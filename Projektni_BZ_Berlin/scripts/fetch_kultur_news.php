<?php
include 'db_connect.php';

$query = "SELECT id, naslov, sazetak, image FROM news WHERE category='kultur' AND showOnPage=1 ORDER BY createdAt DESC LIMIT 3";
$result = mysqli_query($connection, $query);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="news-item">';
        echo '<div class="img-div"><img src="' . $row['image'] . '" alt="' . $row['naslov'] . '"></div>';
        echo '<h2>' . $row['naslov'] . '</h2>';
        echo '<p>' . $row['sazetak'] . '</p>';
        echo '<a href="clanak.php?id=' . $row['id'] . '">Read more...</a>';
        echo '</div>';
    }
} else {
    echo '<p>No news available.</p>';
}
mysqli_close($connection);
?>