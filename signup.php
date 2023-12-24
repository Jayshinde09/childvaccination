<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $email = $_GET['email'];
    $password = $_GET['password'];

    // Connect to your MySQL database
    $conn = new mysqli("localhost", "root", "", "raj");

    // You should hash the password before saving it to the database. 
    // I'm omitting it here for simplicity.
    $sql = "INSERT INTO users (mail, pass) VALUES ('$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful. You can now log in.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
