<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/styles.css">
    <title>EduTourism Sri Lanka</title>
</head>
<body>
    <header>
        <h1>EduTourism Sri Lanka</h1>
        <nav>
            <ul>
                <li><a href="/index.php">Home</a></li>
                <li><a href="/pages/search.php">Search Programs</a></li>
                <li><a href="/pages/community.php">Community</a></li>
                <?php if(isset($_SESSION['username'])): ?>
                    <li><a href="/pages/profile.php">Profile</a></li>
                    <li><a href="/logout.php">Logout</a></li>
                <?php else: ?>
                    <li><a href="/register.php">Register</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>
