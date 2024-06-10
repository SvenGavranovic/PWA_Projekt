<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="clanak.css">
    <title>BZ-Berlin</title>
</head>
<body>
    <header>
        <div class="red-line"></div>
        <div class="header-content">
            <h1 class="logo">B·Z·</h1>
            <nav>
                <ul>
                    <li><a href="naslovna.php">Home</a></li>
                    <li><a href="sport.php">Berlin-Sport</a></li>
                    <li><a href="kultur.php">Kultur und Show</a></li>
                    <li><a href="login.php">Administration</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <article>
        <div class = "news-container">
            <?php
                include 'scripts/db_connect.php';
                if(isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $query = "SELECT * FROM news WHERE id = $id";
                    $result = mysqli_query($connection, $query);
                    if ($result && mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);
                        echo '<div class="news-item">';
                        echo '<h2>' . $row['naslov'] . '</h2>';
                        echo '<div class="img-div"><img src="' . $row['image'] . '" alt="' . $row['naslov'] . '"></div>'; 
                        echo '<p>' . $row['sazetak'] . '</p>';
                        echo '<p>' . $row['glavniTekst'] . '</p>';
                        echo '</div>';
                    } else {
                        echo "No news found with the provided id.";
                    }
                } else {
                    echo "No id provided.";
                }
            ?>
        </div>
    </article>
    <footer>
        <div class="footer-content">
            <p>Weitere Online-Angebote der Axel Springer SE:</p>
        </div>
        <div class="gray-footer"></div>
    </footer>
</body>
</html>