
<?php


require ("config.php");
// Requiring the configuration file

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
function sendMail($email,$reset_token)
{
require ('C:/xampp/htdocs/student_dashboard pj/student_register/mail/PHPMailer/src/Exception.php'); // Include the PHPMailer library
require ('C:/xampp/htdocs/student_dashboard pj/student_register/mail/PHPMailer/src/PHPMailer.php'); 
require ('C:/xampp/htdocs/student_dashboard pj/student_register/mail/PHPMailer/src/SMTP.php');
	$mail = new PHPMailer(); 

    try
    {
	$mail->IsSMTP(); 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'tls'; 
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	//$mail->SMTPDebug = 2; 
	$mail->Username = "prajweshwalekar256@gmail.com";
	$mail->Password = "wpkqjqpmxcquzgre";
	$mail->SetFrom('prajweshwalekar256@gmail.com','Astrisc Institute');
	$mail->Subject = 'Password Reset Link From Astrisc Institute';
	$mail->Body = "We got a request from you to reset your password! <br>
    Click the link below: <br>
    <a href='http://localhost/student_dashboard pj/student_register/updatepassword.php?email=$email&reset_token=$reset_token'>Reset Password </a>";
	$mail->AddAddress($email);
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if(!$mail->Send()){
		echo $mail->ErrorInfo;
	}else{
		header("Location: /student_dashboard pj/student_register/login.php");
	}
} catch (Exception $e)
{
    return false;
}

}

if (isset($_POST['reset_password'])) {
    // Assuming you have established a database connection as $conn

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $query = "SELECT * FROM student_admission WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        if (mysqli_num_rows($result) == 1) {
            // Email found
            $reset_token = bin2hex(random_bytes(16)); 
            date_default_timezone_set('Asia/Kolkata');
            $date = date("Y-m-d");
            $query = "UPDATE `student_admission` SET `resettoken`='$reset_token',`resettokenexpire`='$date' WHERE `email`= '$email' ";

            if (mysqli_query($conn, $query) && sendMail($_POST['email'],$reset_token)) {
                echo "<script>
                alert('Password Reset Link Sent to Mail');

                window.location.href='/student_dashboard pj/student_register/login.php';
                </script>";
            } else {
                echo "<script>
                alert('Server Down! Try again later');
                window.location.href='/student_dashboard pj/student_register/login.php';
                </script>";
            }
        } else {
            echo "<script>
            alert('Email Not Found');
            window.location.href='/student_dashboard pj/student_register/login.php';
            </script>";
        }
    } else {
        // Display the MySQL error message when the query fails
        echo "<script>
        alert('Cannot run query: " . mysqli_error($conn) . "');
        window.location.href='/student_dashboard_pj/student_register/login.php';
        </script>";
    }
}

?>


