<?php
session_start();

$options = [
    'cost' => 12,
];

$conn = mysqli_connect("localhost", "root", "", "bike_models");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$email = $_POST['email'];
$password =$_POST['password'];
echo $password;

$sql = "SELECT * FROM register WHERE email='$email'";
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    // Verify the password
    if (password_verify($password, $row['password'])) {
        // Login successful
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['flash_message'] = "Success! You are successfully logged in!.";

        header("Location: dashboard.php"); // Redirect to the dashboard or another protected page
    } else {
        // Incorrect password
        echo "Incorrect password. <a href='login.php'>Try again</a>";
    }
} else {
    // User not found
    echo "User not found. <a href='login.php'>Try again</a>";
}

mysqli_close($conn);
?>
