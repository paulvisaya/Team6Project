<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["create-password"];
    $confirmPassword = $_POST["confirm-password"];
    
    // Validate form data (you can add more validation as needed)
    if (empty($username) || empty($email) || empty($password) || empty($confirmPassword)) {
        // Handle empty fields
        echo "All fields are required.";
    } elseif ($password !== $confirmPassword) {
        // Handle password mismatch
        echo "Passwords do not match.";
    } else {
        // Process the data (for demonstration, just echoing the data)
        echo "Username: " . $username . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Password: " . $password . "<br>";
        
        // Here you can insert the data into a database, send emails, etc.
    }
} else {
    // Redirect back to the form if accessed directly
    header("Location: register.html");
    exit();
}
?>
