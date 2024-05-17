<?php
include '../includes/header.php';
require_once '../includes/db.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: ../index.php");
    exit;
}

$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM users WHERE id = $user_id";
$result = query($sql);
$user = fetch_assoc($result);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $sql = "UPDATE users SET email = '$email' WHERE id = $user_id";
    if (query($sql)) {
        $user['email'] = $email;
        echo "Profile updated successfully.";
    } else {
        echo "Failed to update profile.";
    }
}
?>

<main>
    <h2>User Profile</h2>
    <p>Username: <?php echo $user['username']; ?></p>
    <form action="profile.php" method="post">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $user['email']; ?>" required><br>
        <input type="submit" value="Update Profile">
    </form>
</main>

<?php include '../includes/footer.php'; ?>