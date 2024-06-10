<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleAll.css">
    <title>BZ-Berlin</title>
</head>
<body>
    <header>
        <div class="red-line"></div>
        <div class="header-content">
            <h1 class="logo">Kultur und Show nachrichten</h1>
            <nav>
                <ul>
                    <li><a href="naslovna.php">Home</a></li>
                    <li><a href="sport.php?id=sport">Berlin-Sport</a></li>
                    <li><a href="kultur.php?id=kultur">Kultur und Show</a></li>
                    <li><a href="login.php">Administration</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <article class="kultur">
            <h1>KULTUR UND SHOW ></h1>
            <div class = "news-container">
                <?php include 'scripts/fetch_kultur_all.php'; ?>
            </div>
        </article>
    </main>
    <footer>
        <div class="footer-content">
            <p>Weitere Online-Angebote der Axel Springer SE:</p>
        </div>
        <div class="gray-footer"></div>
    </footer>
</body>
</html>