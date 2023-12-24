<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $email = $_GET['email'];
    $password = $_GET['password'];

    // Connect to your MySQL database
    $conn = new mysqli("localhost", "root", "", "raj");

    $sql = "SELECT * FROM users WHERE mail = '$email' AND pass = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Login successful
        $_SESSION['email'] = $email;
        header("Location: site.php");
    } else {
        // Login failed
        echo "Login failed. Check your email and password.";
    }
}
?>
