<!DOCTYPE html>
<html>
<head>
    <title>CineLog - Login</title>
</head>
<body>
    <h2>CineLog Login</h2>
    <form action="login.php" method="POST">
        <input type="text" name="username" placeholder="Username" required><br><br>
        <input type="password" name="password" placeholder="Password" required><br><br>
        <button type="submit" name="login">Login</button>
    </form>

    <?php
    if (isset($_POST['login'])) {
        $user = $_POST['username'];
        echo "<p>Try to login with: <b>$user</b></p>";
        // Later we will check this against a database!
    }
    ?>
</body>
</html>
