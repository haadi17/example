<?php
session_start();
require_once '/project/db_connect.php'; // make sure this connects to the DB with both `signup` and `skills` tables

if ($_POST) {
    // Step 1: Sanitize all inputs
    $fullname   = $connect->real_escape_string($_POST['fullname']);
    $phoneno    = $connect->real_escape_string($_POST['phoneno']);
    $email      = $connect->real_escape_string($_POST['email']);
    $username   = $connect->real_escape_string($_POST['username']);
    $password   = $connect->real_escape_string($_POST['password']); // 🔐 hash the password

    $c          = $connect->real_escape_string($_POST['c']);
    $python     = $connect->real_escape_string($_POST['python']);
    $java       = $connect->real_escape_string($_POST['java']);
    $html       = $connect->real_escape_string($_POST['html']);

    $english    = $connect->real_escape_string($_POST['english']);
    $kannada    = $connect->real_escape_string($_POST['kannada']);
    $urdu       = $connect->real_escape_string($_POST['urdu']);
    $marathi    = $connect->real_escape_string($_POST['marathi']);

    $singing    = $connect->real_escape_string($_POST['Singing']);
    $music      = $connect->real_escape_string($_POST['music']);
    $communication = $connect->real_escape_string($_POST['Communication']);
    $artcraft   = $connect->real_escape_string($_POST['Art']);

    // Step 2: Insert into `signup`
    $sql_signup = "INSERT INTO signup (Fullname, Phone_no, Email, username, password)
                   VALUES ('$fullname', '$phoneno', '$email', '$username', '$password')";

    if ($connect->query($sql_signup) === TRUE) {
        $userID = $connect->insert_id; // get the userID from the last insert (auto-increment)

        // Step 3: Insert into `skills` (same DB)
        $sql_skills = "INSERT INTO skills (
                            userID, c, python, java, html, english, kannada, urdu, marathi, 
                            singing, musical_instruments, communication, ArtCraft
                       ) VALUES (
                            '$userID', '$c', '$python', '$java', '$html', '$english', '$kannada', '$urdu', '$marathi',
                            '$singing', '$music', '$communication', '$artcraft'
                       )";

        if ($connect->query($sql_skills) === TRUE) {
            echo "✅ User registered and skills saved successfully!";
        } else {
            echo "⚠️ Skills insert failed: " . $connect->error;
        }

    } else {
        echo "❌ Signup failed: " . $connect->error;
    }
}
?>
