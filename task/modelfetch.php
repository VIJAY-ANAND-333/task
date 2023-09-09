<?php
// Establish database connection
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch categories from the database
$categoryQuery = "SELECT * FROM categories";
$categoryResult = $conn->query($categoryQuery);

// Handle category selection
if (isset($_GET['category'])) {
    $selectedCategory = $_GET['category'];
    
    // Perform SQL query to retrieve products of the selected category
    $sql = "SELECT * FROM products WHERE category_id = $selectedCategory";
    $result = $conn->query($sql);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Product Search by Category</title>
</head>
<body>

<h1>Product Search by Category</h1>

<!-- Category selection dropdown -->
<form action="" method="GET">
    <label for="category">Select a Category:</label>
    <select name="category" id="category">
        <option value="" selected disabled>Select a category</option>
        <?php while ($categoryRow = $categoryResult->fetch_assoc()): ?>
            <option value="<?php echo $categoryRow['id']; ?>"><?php echo $categoryRow['name']; ?></option>
        <?php endwhile; ?>
    </select>
    <button type="submit">Search</button>
</form>

<!-- Display products of the selected category -->
<?php if (isset($result) && $result->num_rows > 0): ?>
    <h2>Products in the Selected Category:</h2>
    <ul>
        <?php while ($row = $result->fetch_assoc()): ?>
            <li>
                <strong><?php echo $row['name']; ?></strong><br>
                <?php echo $row['description']; ?>
            </li>
        <?php endwhile; ?>
    </ul>
<?php elseif (isset($result)): ?>
    <p>No products found in the selected category.</p>
<?php endif; ?>

</body>
</html>

<?php
// Close the database connection
$conn->close();
?>
