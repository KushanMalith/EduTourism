<?php include '../includes/header.php'; ?>
<main>
    <h2>Community Forum</h2>
    <form action="community.php" method="post">
        <label for="topic">Topic:</label>
        <input type="text" id="topic" name="topic" required><br>
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea><br>
        <input type="submit" value="Post">
    </form>

    <?php
    require_once '../includes/db.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
        $topic = $_POST['topic'];
        $message = $_POST['message'];
        $sql = "INSERT INTO forums (user_id, topic, message) VALUES ($user_id, '$topic', '$message')";
        if (query($sql)) {
            echo "Post submitted.";
        } else {
            echo "Failed to submit post.";
        }
    }

    $sql = "SELECT forums.*, users.username FROM forums JOIN users ON forums.user_id = users.id ORDER BY created_at DESC";
    $result = query($sql);
    $posts = fetch_all($result);

    if (count($posts) > 0) {
        echo "<ul>";
        foreach ($posts as $post) {
            echo "<li><strong>{$post['username']}</strong> ({$post['created_at']}): <em>{$post['topic']}</em><br>{$post['message']}</li>";
        }
        echo "</ul>";
    } else {
        echo "No posts yet.";
    }
    ?>
</main>
<?php include '../includes/footer.php'; ?>
