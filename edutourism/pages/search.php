<?php include '../includes/header.php'; ?>
<main>
    <h2>Search Educational Programs</h2>
    <form action="search.php" method="get">
        <label for="query">Search:</label>
        <input type="text" id="query" name="query"><br>
        <label for="category">Category:</label>
        <input type="text" id="category" name="category"><br>
        <label for="location">Location:</label>
        <input type="text" id="location" name="location"><br>
        <input type="submit" value="Search">
    </form>

    <?php
    require_once '../includes/db.php';
    $query = $_GET['query'] ?? '';
    $category = $_GET['category'] ?? '';
    $location = $_GET['location'] ?? '';
    $sql = "SELECT * FROM programs WHERE 
            (title LIKE '%$query%' OR description LIKE '%$query%')
            AND (category LIKE '%$category%')
            AND (location LIKE '%$location%')";
    $result = query($sql);
    $programs = fetch_all($result);

    if (count($programs) > 0) {
        echo "<ul>";
        foreach ($programs as $program) {
            echo "<li><a href='program_details.php?id={$program['id']}'>{$program['title']}</a></li>";
        }
        echo "</ul>";
    } else {
        echo "No programs found.";
    }
    ?>
</main>
<?php include '../includes/footer.php'; ?>
