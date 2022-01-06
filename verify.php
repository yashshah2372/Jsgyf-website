<?php
    include("db_connect.php");
    ob_start();
    session_start();
    
     setcookie('rand');
    
    $invalidEmail='';
    $invalidPassword='';

    if (isset($_POST['cont'])) 
    {
        require('userlogin_process.php');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="./loginPage.css">
    
    <style>
    #box
    {
        background-color:white;width:35%;height:60vh;border-radius:20px;
    }
    .footer{
        margin-top:25px;margin-left:178px
    }
        @media screen and (max-width: 450px)
{
    #box{
        width:80%;
        height:60vh;
    }
    .footer{
        margin-left:75px;
    }
}
    </style>
</head>

<body style="background-color:#125B98">
    <form id="login" method="POST" style="width:100%;">
        <div class="container" id="box" >
        <div class="mb-3 mt-3">
            <label for="email" class="form-label" style="color:#125B98;margin-top:60px">Enter OTP that has been emailed to you:</label>
            <input type="number" class="form-control" required id="email" placeholder="Enter OTP" name="otp">
            <small class="text-danger"><?php echo $invalidEmail; ?></small>
        </div>
        
        <div class="form-check mb-3">
            <label class="form-check-label text-danger">
                OTP valid for 5 minutes
            </label>
        </div>
        <button type="submit" name="cont" class="btn btn-lg btn-block" style="background-color:#125B98;color:white">Proceed</button>
        <div class="footer" style="color:#125B98">
             <p>
                 New user? | <a href="/registrationPage.php" style="color:#125B98">Register</a>
             </p>
         </div>
         </div>
    </form>
   
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2"
        crossorigin="anonymous"></script>
</body>

</html>