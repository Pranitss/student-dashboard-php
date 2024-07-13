<?php

$servername = "localhost";
$username = "root";
$password = '';
$dbname = "asteriscstudents";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $company_name = $_POST['company_name'];
    $job_title = $_POST['job_title'];
    $com_city = $_POST['com_city'];
    $com_state = $_POST['com_state'];
    $com_salary=$_POST['com_salary'];
    

    
    

    $sql = "INSERT INTO job_calls (company_name,job_title,com_city, com_state, com_salary) 
            VALUES ('$company_name', '$job_title','$com_city', '$com_state', '$com_salary')";

    if ($conn->query($sql) === TRUE) {
        header("Location: jobcalls.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>