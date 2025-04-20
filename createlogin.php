<?php
session_start();
$conn = new mysqli("localhost", "root", "", "skilll_ex");

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $username = $conn->real_escape_string($_POST['username']);
    $password = $_POST['password'];

    $sql = "SELECT * FROM signup WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        
        // If password is stored in plain text (not recommended):
        if ($row['password'] === $password) {
            $_SESSION['username'] = $username;
            echo "Login successful!";
            header("Location: dashboard.php"); // redirect after login
        } else {
            echo "Invalid password.";
        }

        // If password is hashed (recommended):
        // if (password_verify($password, $row['password'])) { ... }

    } else {
        echo "User not found.";
    }
}

?>

