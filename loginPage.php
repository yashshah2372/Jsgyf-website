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
    .logo{
           width: 140px;
           transform:translateX(673px);
           margin-top:15px;
    }
    @media screen and (max-width: 1300px)
  {
    #box{
        width:50%;
        height:63vh;
    }
    .footer{
        margin-left:35px;
    }
    .logo{
         width: 133px;
        transform:translateX(540px);
        margin-top:10px;
    }
    }
       @media screen and (max-width: 1100px)
    {
    #box{
        width:50%;
        height:40vh;
    }
    .footer{
        margin-left:35px;
    }
    .logo{
         width: 200px;
        transform:translateX(390px);
        margin-top:105px;
    }
    }
     @media screen and (max-width: 1000px)
{
    #box{
        width:80%;
        height:60vh;
    }
    .footer{
        margin-left:25px;
    }
    .logo{
         width: 170px;
        transform:translateX(275px);
    }
    }
            @media screen and (max-width: 550px)
{
    #box{
        width:80%;
        height:60vh;
    }
    .footer{
        margin-left:75px;
    }
    .logo{
         width: 120px;
        transform:translateX(189px);
        margin-top:15px;
    }
    }
        @media screen and (max-width: 500px)
{
    #box{
        width:80%;
        height:60vh;
    }
    .footer{
        margin-left:75px;
    }
    .logo{
         width: 120px;
        transform:translateX(130px);
        margin-top:10px;
    }
    }
    @media screen and (max-width: 380px)
    {
    #box{
        width:80%;
        height:60vh;
    }
    .footer{
        margin-left:25px;
    }
    .logo{
         width: 120px;
        transform:translateX(114px);
        margin-top:15px;
    }
      @media screen and (max-width: 330px)
    {
    #box{
        width:80%;
        height:60vh;
    }
    .footer{
        margin-left:25px;
    }
    .logo{
         width: 110px;
        transform:translateX(100px);
        margin-top:15px;
    }
    }
    </style>
</head>
<body style="background-color:#125B98">
    <img src="./assets/logo.png" class="logo mb-2">
    <form id="login" method="POST" style="width:100%;margin-top:50px;">
        <div class="container" id="box" >
        <div class="mb-3 mt-3">
            <label for="email" class="form-label" style="color:#125B98;margin-top:60px">Email:</label>
            <input type="email" class="form-control" required id="email" placeholder="Enter email" name="email">
            <small class="text-danger"><?php echo $invalidEmail; ?></small>
        </div>
        <div class="mb-3">
            <label for="pwd" class="form-label" style="color:#125B98">Password:</label>
            <input type="password" class="form-control" required id="pwd" placeholder="Enter password" name="password">
            <small class="text-danger"><?php echo $invalidPassword; ?></small>
        </div>
        <div class="form-check mb-3">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember"> Remember me
            </label>
        </div>
        <button type="submit" name="cont" class="btn btn-lg btn-block" style="background-color:#125B98;color:white">Log In</button>
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