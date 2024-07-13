<?php
// Starting the session
session_start();

// The require() function includes the configuration file
require '../config.php';

// Checking whether login button is pressed and
// email and password are not empty
if (isset($_POST['login']) && !empty($_POST['email']) && !empty($_POST['password'])) {
    // Storing the email and password into variables
    $email = $_POST['email'];
    $password = $_POST['password'];

    // SQL query for retrieving the hashed password from the database
    $query = "SELECT Password FROM student_admission WHERE email ='$email'";

    // Perform query
    $data = mysqli_query($con, $query);

    // Check if the user exists
    if (mysqli_num_rows($data) == 1) {
        // Fetch the hashed password from the result
        $row = mysqli_fetch_assoc($data);
        $hashedPassword = $row['Password'];

        // Use password_verify to compare the provided password with the hashed password
        if (password_verify($password, $hashedPassword)) {
            $_SESSION['email'] = $email;
            header("Location: /student_dashboard pj/index.php");
            exit();
        } else {
            $errorMessage2 = "Invalid Username or password!!";
        }
    } else {
        $errorMessage2 = "Invalid Username or password!!";
    }

    // Sending the error message to login.php through loginError variable
    header("Location: login.php?loginError=$errorMessage2");
    exit();
}
?>
