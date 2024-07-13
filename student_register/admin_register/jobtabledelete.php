<?php
$servername = "localhost";
$username = "root";
$password = '';
$dbname = "asteriscstudents";

$conn = new mysqli($servername, $username, $password, $dbname, 3306);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

try {
    // Validate and sanitize the input
    if (isset($_GET['company_id']) && !empty($_GET['company_id'])) {
        $dd = $_GET['company_id'];
        // You can add further validation if needed (e.g., check if the username exists in the database)
    } else {
        throw new Exception("Invalid or missing 'name' parameter.");
    }

    $stmt = $conn->prepare("DELETE FROM job_calls WHERE company_id = ?");
    $stmt->bind_param("s", $dd); 

    if ($stmt->execute()) {
        // Data deleted successfully, now redirect to show.php to display the updated user data
        header("Location: jobtable.php");
        exit; // Ensure the script terminates after the redirect
    } else {
        throw new Exception("Error deleting data: " . $stmt->error);
    }

    $stmt->close();
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

$conn->close();
?>