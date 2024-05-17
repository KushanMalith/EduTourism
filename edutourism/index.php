<?php include 'includes/header.php'; ?>
<main>
    <h2>Welcome to EduTourism Sri Lanka</h2>
    <p>Explore and book educational programs, tours, and cultural events in Sri Lanka.</p>
    <a href="/pages/search.php" class="btn">Search Programs</a>
    <h2>Login</h2>
    <form action="login.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>
        <input type="submit" value="Login">
    </form>
    <p>Don't have an account? <a href="register.php">Register here</a>.</p>
</main>
<?php include 'includes/footer.php'; ?>
