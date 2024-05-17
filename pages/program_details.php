<?php include '../includes/header.php'; ?>
<main>
    <?php
    require_once '../includes/db.php';
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM programs WHERE id = $id";
        $result = query($sql);
        $program = fetch_assoc($result);

        if ($program) {
            echo "<h2>{$program['title']}</h2>";
            echo "<p>{$program['description']}</p>";
            echo "<p>Category: {$program['category']}</p>";
            echo "<p>Location: {$program['location']}</p>";
            echo "<p>Age Group: {$program['age_group']}</p>";
            echo "<p>Learning Objectives: {$program['learning_objectives']}</p>";
            echo "<p>Budget: {$program['budget']}</p>";
            echo "<p>Start Date: {$program['start_date']}</p>";
            echo "<p>End Date: {$program['end_date']}</p>";

            echo "<h3>Book this program</h3>";
            echo "<form action='booking.php' method='post'>";
            echo "<input type='hidden' name='program_id' value='{$program['id']}'>";
            echo "<input type='submit' value='Book Now'>";
            echo "</form>";
        } else {
            echo "Program not found.";
        }
    }
    ?>
</main>
<?php include '../includes/footer.php'; ?>