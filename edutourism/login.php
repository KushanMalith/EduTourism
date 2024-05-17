<?php
session_start();
require_once 'includes/db.php';
require_once 'includes/functions.php';

$username = $_POST['username'];
$password = $_POST['password'];

$user = login_user($username, $password);

if ($user) {
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['user_type'] = $user['user_type'];
    header("Location: pages/home.php");
} else {
    echo "Invalid username or password.";
}
?>
