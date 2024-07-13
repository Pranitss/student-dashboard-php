<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Update</title>
    <style>
        /* Add your CSS styles here */
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        h3 {
            text-align: center;
            margin-bottom: 20px;
        }

        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button[type="submit"] {
            width: 100%;
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <?php 
 require ("config.php");
 if (isset($_GET['email']) && isset($_GET['reset_token'])) {
    date_default_timezone_set('Asia/Kolkata');
    $date = date("Y-m-d");
    $query = "SELECT * FROM `student_admission` WHERE `email`= '$_GET[email]'AND`resettoken`='$_GET[reset_token]'AND`resettokenexpire`='$date' ";
    $result= mysqli_query($conn,$query);
    if ($result) {
        if (mysqli_num_rows($result)==1) {
         
          
        echo"
            <form method='POST'>
             <h3> Create New Password  </h3>
             <input type='password' placeholder='New Password' name='Password'>
             <button type='submit' name='updatepassword'>UPDATE</button>
             <input type='hidden' name='email' value='$_GET[email]'>
               </form>
               
            ";
        }
        else
        {
            echo "<script>
        alert('Invalid or Expired Link');
        window.location.href='/student_dashboard pj/student_register/login.php';
        </script>";
        }
    }
    else
    {
        echo "<script>
        alert('Password Reset Link Sent to Mail');
        window.location.href='/student_dashboard pj/student_register/login.php';
        </script>";
    }
 }

?>

<?php
if(isset($_POST['updatepassword']))
{
    $pass=password_hash($_POST['Password'],PASSWORD_BCRYPT);
    $update= "UPDATE `student_admission` SET `Password`='$pass',`resettoken`=NULL,`resettokenexpire`=NULL WHERE `email`='$_POST[email]'";
    if (mysqli_query($conn,$update)) {
        echo "<script>
        alert('Password Successfully Updated');
        window.location.href='/student_dashboard pj/student_register/login.php';
        </script>";
    }
    else {
        echo "<script>
        alert('Sorry Password Not Updated');
        window.location.href='/student_dashboard pj/student_register/login.php';
        </script>";
    }
}
?>
</body>
</html>