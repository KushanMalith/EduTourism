<?php
require_once 'includes/db.php';
require_once 'includes/functions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $user_type = $_POST['user_type'];

    if (register_user($username, $password, $email, $user_type)) {
        echo "Registration successful. <a href='index.php'>Login here</a>.";
    } else {
        echo "Registration failed.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/styles.css">
    <title>Register</title>
</head>
<body>
    <header>
        <h1>EduTourism Sri Lanka</h1>
        <nav>
            <ul>
                <li><a href="/index.php">Home</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Register</h2>
        <form action="register.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>
            <label for="user_type">User Type:</label>
            <select id="user_type" name="user_type" required>
                <option value="traveler">Traveler</option>
                <option value="service_provider">Service Provider</option>
            </select><br>
            <input type="submit" value="Register">
        </form>
    </main>
    <?php include 'includes/footer.php'; ?>
</body>
</html>