<?php
//checking whether the submit button is pressesd or not
session_start();

function updateReferral()
{
   $query = "SELECT * FROM student_admission WHERE referral_code ='".$_SESSION['referral_code']."'";
   $result =mysqli_query($GLOBALS['conn'],$query);

   //echo "$result";

   if ($result) {
    if(mysqli_num_rows($result)==1)
    {
       $result_fetch=mysqli_fetch_assoc($result);
       $point = $result_fetch['referral_point'] + 10;


       $update_query = "UPDATE student_admission SET referral_point='$point' WHERE email='$result_fetch[email]'";

      if (!mysqli_query($GLOBALS['conn'], $update_query)) {
       echo "<script>
            alert('Cannot Run Query');
            window.location.href='/student_dashboard pj/index.php';
          </script>";
      exit;
}
    }
    else
    {
      "<script>
     alert('Invalid Referral Code');
     window.location.href='/student_dashboard pj/index.php';
     </script>
    ";
    exit;
    }
    
   }
   else {
    "<script>
     alert('Cannot Run Query');
     window.location.href='/student_dashboard pj/index.php';
     </script>
    ";
    exit;
   }
}
if(isset($_POST["register5"])) {

  //starting the session
	
  //including the config.php file
    include "config.php";
    
    $referral_code=strtoupper(bin2hex(random_bytes(4)));
    
if($_SESSION["referral_code"]!='')
{
  updateReferral();
}
 

    //insert query of sql
    //wherein we will fetch the   values from the session variable values 
    $sql = "INSERT INTO student_admission (student_id, full_name, gender, dob, email, student_number, parent_number, address, city, pin_code, work, c_name, e_number, branch, course, batch_timing, tutor_name, photofile, docfile, total_fees, paid_fees, payment_type, cheque_no, admission_date, receipt_number , referral_code,referral_point)
    VALUES ('', '{$_SESSION['name']}', '{$_SESSION['gender']}', '{$_SESSION['dob']}', '{$_SESSION['email']}', '{$_SESSION['student_number']}', '{$_SESSION['parent_number']}', '{$_SESSION['address']}', '{$_SESSION['city']}', '{$_SESSION['pincode']}', 
    '{$_SESSION['working']}', '{$_SESSION['cname']}', '{$_SESSION['e_number']}', 
    '{$_SESSION['branch']}', '{$_SESSION['course']}', '{$_SESSION['batch_timing']}', '{$_SESSION['tutor_name']}', '{$_SESSION['img']}', '{$_SESSION['doc']}', 
    '{$_SESSION['total_fees']}', '{$_SESSION['paid_fees']}', '{$_SESSION['payment_type']}', '{$_SESSION['cheque_no']}', '{$_SESSION['admission_date']}', '{$_SESSION['receipt_number']}','$referral_code',0)";

  
    //perform object oriented style query
    //$mysqli -> query(query, resultmode) 
    if ($conn->query($sql) === TRUE) {

      //if the above query executed successfully
      //redirect the user to success.php page
      header("Location:success.php");

      //destroy the session
      session_destroy();
    
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }	
  } 

  //if submit button was not pressed of last page then
  else {

    //redirect to review.php page
	  header("Location: review.php");
  }
?>