<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $username = $_POST["username"];
    $password = $_POST["password"];
}


if ($username == "admin" && $password == "adminpass")
{
    $_SESSION["admin_logged_in"] = true;
    header("Location: index.php");
}
else
{
    echo "Invalid Login Credentials";
}

?>