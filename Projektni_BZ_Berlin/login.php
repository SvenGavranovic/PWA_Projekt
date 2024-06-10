<?php
session_start();
include 'scripts/db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT username, password FROM korisnik WHERE username = ?";
    $stmt = mysqli_prepare($connection, $query);
    mysqli_stmt_bind_param($stmt, 's', $username);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $db_username = $row['username'];
        $db_password = $row['password'];

        if (password_verify($password, $db_password)) {
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $db_username;

            header('Location: administracija.php');
            exit;
        } else {
            $error = 'Invalid username or password';
        }
    } else {
        $error = 'Invalid username or password';
    }

    mysqli_stmt_close($stmt);
    mysqli_close($connection);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>
<body>
<header>
    <div class="red-line"></div>
    <div class="header-content">
        <h1 class="logo">Melde dich in deinem Konto an</h1>
    </div>
</header>
<main>
    <article>
        <h2>Login</h2>
        <?php if (isset($error)) echo '<p style="color: red;">' . $error . '</p>'; ?>
        <form method="post" action="login.php">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br>
            <button type="submit">Login</button>
        </form>
        <form method="post" action="scripts/return.php" class="return">
                <button type="submit">Return</button>
            </form>
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
