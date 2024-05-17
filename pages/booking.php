<?php
session_start();
require_once '../includes/db.php';

if (!isset($_SESSION['user_id']) || !isset($_POST['program_id'])) {
    header("Location: ../index.php");
    exit;
}

$user_id = $_SESSION['user_id'];
$program_id = $_POST['program_id'];
$sql = "INSERT INTO bookings (user_id, program_id) VALUES ($user_id, $program_id)";
if (query($sql)) {
    echo "Booking successful. <a href='home.php'>Go to Home</a>";
} else {
    echo "Booking failed.";
}
?>
