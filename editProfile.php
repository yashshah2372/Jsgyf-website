<?php
include("db_connect.php");

ob_start();
session_start();

$rand=$_SESSION['rand'];
if($rand==0)
{
    header("Location:loginPage.php");
}
$sql="SELECT * FROM Members WHERE rand=$rand";
$result=mysqli_query($conn,$sql);
$singleRow=mysqli_fetch_assoc($result);

if(isset($_POST['submitphoto']))
{
    unlink($singleRow['photo']);
    $firstName=$singleRow['firstName'];
    $lastName=$singleRow['lastName'];
    include("imgupload.php");
    // header("Location:editProfile.php");
    $filepathnew=$filepath.' '.rand();
    $query="UPDATE Members
            SET photo='$filepathnew' ";
            
    if(mysqli_query($conn, $query))  
      {  
          echo '<script>alert("Data Uploaded Successfully")</script>'; 
      }  
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="C:\Users\Yash\OneDrive\Desktop\webdev bootcamp\forms.css">
</head>
<body>
    <?php
    if(isset($_POST['submit']))
    {
        $phoneNumber=mysqli_escape_string($conn,$_POST['phoneNumber']);
        $dob=mysqli_escape_string($conn,$_POST['dob']);
        // $password=mysqli_escape_string($conn,$_POST['password']);
        // $confirmPass=mysqli_escape_string($conn,$_POST['confPass']);
        $instaId=$_POST['instaId'];
        $linkedIn=mysqli_escape_string($conn,$_POST['linkedIn']);
        $website=mysqli_escape_string($conn,$_POST['website']);
        $desc=mysqli_escape_string($conn,$_POST['desc']);
        
        $query="UPDATE Members
            SET birthdate='$dob', 
            phone_number='$phoneNumber',
            insta_id='$instaId',
            linkedIn='$linkedIn',
            website='$website',
            description='$desc'";
            
    if(mysqli_query($conn, $query))  
      {  
          echo '<script>alert("Data Uploaded Successfully")</script>'; 
      }  
    }
    ?>
    <div class="container">
        <h1 class="display-4">Edit Profile</h1>
        <form id="registration" method="POST">
            <div class="row form-group">
                <div class="col-md-12">
                    <label for="phone number"></label>
                    <input value="<?php echo $singleRow['phone_number']; ?>" type="tel" name="phoneNumber" class="form-control" placeholder="Phone number" required>
                </div>
            </div>

            <div class="row form-group">
                <div class="form-group col-md-12">
                    <label for="date">Date of birth</label>
                    <input value="<?php echo $singleRow['birthdate']; ?>" type="date" name="dob" class="form-control" id="date" required>
                </div>
            </div>
            <!--<div class="row form-group">-->
            <!--    <div class="form-group col-md-6">-->
            <!--        <label for="exampleInputPassword1"></label>-->
            <!--        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>-->
            <!--    </div>-->

            <!--    <div class="form-group col-md-6">-->
            <!--        <label for="exampleInputPassword1"></label>-->
            <!--        <input type="password" name="confPass" class="form-control" id="exampleInputPassword1"-->
            <!--            placeholder="Confirm password" required>-->
            <!--    </div>-->
            <!--</div>-->
            <div class="form-row">
             <div class="form-group col-md-4">
                    <label for="inputAddress"></label>
                    <input type="text" value="<?php echo $singleRow['insta_id']; ?>" name="instaId" class="form-control" placeholder="Instagram ID">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputAddress"></label>
                    <input type="text" name="linkedIn" value="<?php echo $singleRow['linkedIn']; ?>" class="form-control" placeholder="LinkedIn Profile">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputAddress"></label>
                    <input type="text" value="<?php echo $singleRow['website']; ?>" name="website" class="form-control" placeholder="Website(if any)">
                </div>
            </div>
             <div class="form-row">
             <div class="form-group col-md-12">
                    <label for="inputAddress"></label>
                    <textarea  style="width:100%;" name="desc" class="form-control"  placeholder="Your description in short"><?php echo $singleRow['description']; ?></textarea>
                </div>
                
            </div>
            
            <button type="submit" name="submit" form="registration" style="margin-bottom:10px;" value="Submit">Submit</button>
        </form>
        <div class="bg-light" style="font-size:40px;">Change Profile Picture</div>
        <form method="POST">
            <div class="form-group">
                <label for="exampleFormControlFile1">Example file input</label>
                <input  type="file" name="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
            <button type="submit" name="submitphoto" form="registration" style="margin-bottom:10px;" value="Submit">Submit</button>
        </form>
        <img src="<?php echo $singleRow['photo']; ?>" >
    </div>
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