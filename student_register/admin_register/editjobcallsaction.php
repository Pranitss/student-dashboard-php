<?php
$servername = "localhost";
$username = "root";
$password = '';
$dbname = "asteriscstudents"; // Replace 'my' with your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, 3306);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $company_id = $_POST['company_id'];
    $company_name = $_POST['company_name'];
    $job_title = $_POST['job_title'];
    $com_city = $_POST['com_city'];
    $com_state = $_POST['com_state'];
    $com_salary = $_POST['com_salary'];
    


    // Sanitize inputs to prevent SQL injection (use proper database-specific methods)
    $company_id = mysqli_real_escape_string($conn, $company_id);
    $company_name = mysqli_real_escape_string($conn, $company_name);
    $job_title = mysqli_real_escape_string($conn, $job_title);
    $com_city = mysqli_real_escape_string($conn, $com_city);
    $com_state = mysqli_real_escape_string($conn, $com_state);
    $com_salary = mysqli_real_escape_string($conn, $com_salary);
    

    // Build the SQL query using string concatenation
    $sql = "UPDATE job_calls SET company_id = '$company_id', company_name = '$company_name', job_title = '$job_title', com_city = '$com_city', com_state = '$com_state', com_salary = '$com_salary' WHERE company_id = '$company_id'";

    // Execute the SQL query
    if ($conn->query($sql) === TRUE) {
        require 'jobtable.php'; // This line should be changed based on your requirements
    } else {
        echo "Error updating data: " . $conn->error;
    }
}

// Close the database connection
?>
