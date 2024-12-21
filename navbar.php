<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Navbar Component</title>
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar">
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="login.php">SHOP</a></li>
            <li>
                <?php if (isset($_SESSION['user_id'])): ?>
                    <a href="dashboard.php">DASHBOARD</a>
                <?php else: ?>
                    <a href="login.php">DASHBOARD</a>
                <?php endif; ?>
            </li>
            <li>
                <?php if (isset($_SESSION['user_id'])): ?>
                    <a href="price.php">PRICE</a>
                <?php else: ?>
                    <a href="login.php">PRICE</a>
                <?php endif; ?>
            </li>
            <li><a href="login.php">LOGIN</a></li>
        </ul>
    </nav>
</body>
</html>
