<?php
include("db_connect.php");

ob_start();
session_start();
$email="abcd@vg.com";
if(isset($_POST['cont']))
{
$query="INSERT INTO Member_Emails(emails) VALUES ('$email')";
            if(mysqli_query($conn, $query))  
            {  
              //   echo '<script>alert("Data Uploaded Successfully")</script>'; 
            header("loginPage.php");
            }
}
?>
<form method="POST">
    <input type="submit" name="cont">
</form>