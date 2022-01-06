<?php
include("db_connect.php");

ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<style>
#header{
    color:#125B98;
    font-size:50px;
}
   @media screen and (max-width: 450px) {
       #header{
           font-size:40px;
       }
       .lastname{
           padding-top:13px;
       }
       .phonenumber{
            padding-top:13px;
       }
   }
   @media screen and (max-width: 350px) {
       #header{
           font-size:34px;
       }
        .lastname{
           padding-top:13px;
       }
       .phonenumber{
            padding-top:13px;
       }
   }
</style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="webdev bootcamp\forms.css">
</head>

<body>
    <?php 
    if(isset($_POST['submit']))
    {
    $errors = array();
    $firstName=mysqli_escape_string($conn,$_POST['firstName']);
    $lastName=mysqli_escape_string($conn,$_POST['lastName']);
    $age=mysqli_escape_string($conn,$_POST['age']);
    $dob=mysqli_escape_string($conn,$_POST['dob']);
    $address=mysqli_escape_string($conn,$_POST['address']);
    $phoneNumber=mysqli_escape_string($conn,$_POST['phoneNumber']);
    $email=mysqli_escape_string($conn,$_POST['email']);
    $password=mysqli_escape_string($conn,$_POST['password']);
    $hash_pass= password_hash($password, PASSWORD_DEFAULT);
    $confpassword=mysqli_escape_string($conn,$_POST['confPass']);
    $profession=mysqli_escape_string($conn,$_POST['profession']);
    $hobbies=mysqli_escape_string($conn,$_POST['hobbies']);
    $linkedIn=mysqli_escape_string($conn,$_POST['linkedIn']);
    $instaId=mysqli_escape_string($conn,$_POST['instaId']);
    $website=mysqli_escape_string($conn,$_POST['website']);
    $desc=mysqli_escape_string($conn,$_POST['desc']);
    $rand=rand(10000000000000,1000000000000000);
    $sql = "SELECT * FROM Member_Emails WHERE emails LIKE '%".$email."%'";
    $result=mysqli_query($conn,$sql);
	$Row=mysqli_fetch_assoc($result);
	$designation="Member";
    include("imgupload.php");
    
    // $filepath=mysqli_escape_string($conn,$_POST['file']);
    if(!empty($Row))
    {
            if($password==$confpassword)
             {
                $query1="INSERT INTO Members(rand,firstName,lastName,age,birthdate,email,password,profession,address,phone_number,insta_id,linkedIn,website,hobbies,description,designation,photo) VALUES ('$rand','$firstName','$lastName','$age','$dob','$email','$hash_pass','$profession','$address','$phoneNumber','$instaId','$linkedIn','$website','$hobbies','$desc','$designation','$filepath')";
            if(mysqli_query($conn,$query1))
            {  
                header("Location:loginPage.php");
            }  
            else
            {
                echo "Cannot register";
            }
             }
        else
            {
                echo '<script>alert("Password did not match")</script>';
            }
    }
    else
    {
        echo "         This Mail-id is not registered";
    }
    }
    ?>
    <div class="container bg-light">
        <h1 class="display-4" id="header">Registration Page</h1>
        <form  method="POST" enctype="multipart/form-data">
            <div class="row form-group">
                <div class="col-md-4" style="color:#125B98">
                    <label for="first name">First name</label>
                    <input type="text" name="firstName" class="form-control" placeholder="First name" required>
                </div>
                <div class="lastname col-md-4" style="color:#125B98">
                    <label for="last name">Last name</label>
                    <input type="text" id="lastname" name="lastName" class="form-control" style="color:#125B98" placeholder="Last name" required>
                </div>
                <div class="phonenumber col-md-4" style="color:#125B98">
                    <label for="phone number">Phone number</label>
                    <input type="text" id="phonenumber" pattern="[1-9]{1}[0-9]{9}" name="phoneNumber" class="form-control" placeholder="Phone number" required>
                </div>
            </div>

            <div class="row form-group">
                <div class="form-group col-md-4" style="color:#125B98">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="email" required>
                </div>
                <div class="form-group col-md-4" style="color:#125B98">
                    <label for="exampleFormControlSelect1">Age</label>
                    <select class="form-control" style="color:#125B98" name="age" id="exampleFormControlSelect1" placeholder="Age" required>
                        <option>14</option>
                        <option>15</option>
                        <option>16</option>
                        <option>17</option>
                        <option>18</option>
                        <option>19</option>
                        <option>20</option>
                        <option>21</option>
                        <option>22</option>
                        <option>23</option>
                        <option>24</option>
                        <option>25</option>
                    </select>
                </div>
                <div class="form-group col-md-4" style="color:#125B98">
                    <label for="date">Date of birth</label>
                    <input type="date" name="dob" class="form-control" id="date" required>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6" style="color:#125B98">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                </div>

                <div class="form-group col-md-6" style="color:#125B98">
                    <label for="exampleInputPassword1">Confirm Password</label>
                    <input type="password" name="confPass" class="form-control" id="exampleInputPassword2" onChange="checkPasswordMatch();"
                        placeholder="Confirm password" required>
                </div>
                <div class="registrationFormAlert text-center" id="divCheckPasswordMatch" style="color:red">
                </div>
            </div>

            <div class="form-group"style="color:#125B98">
                <label for="inputAddress">Address</label>
                <input type="text" name="address" class="form-control" id="inputAddress" placeholder="Address" required>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4"style="color:#125B98">
                    <label for="exampleFormControlSelect">Select profession</label>
                    <select class="form-control" name="profession" id="exampleFormControlSelect" aria-placeholder="Select profession" required>
                        <option>Student</option>
                        <option>Working</option>
                    </select>
                </div>
                <div class="form-group col-md-8" style="color:#125B98">
                    <label for="inputAddress">Hobbies</label>
                    <input type="text" name="hobbies" class="form-control"  required>
                </div>
            </div>
            <div class="form-row">
             <div class="form-group col-md-4" style="color:#125B98">
                    <label for="inputAddress">Instagram ID(optional)</label>
                    <input type="text" name="instaId" class="form-control"  placeholder="Instagram ID">
                </div>
                <div class="form-group col-md-4"style="color:#125B98">
                    <label for="inputAddress">LinkedIn(optional)</label>
                    <input type="text" name="linkedIn" class="form-control"  placeholder="LinkedIn Profile">
                </div>
                <div class="form-group col-md-4"style="color:#125B98">
                    <label for="inputAddress">Website(optional)</label>
                    <input type="text" name="website" class="form-control"  placeholder="Website(if any)">
                </div>
            </div>
             <div class="form-row">
             <div class="form-group col-md-12">
                    <label for="inputAddress"></label>
                    <textarea style="width:100%;" name="desc" class="form-control" placeholder="Your description in short" required></textarea>
                </div>
                
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Example file input</label>
                <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1" required>
            </div>
            <input type="submit" name="submit" style="margin-bottom:10px;background-color:#125B98;color:white" value="Submit">
        </form>
    </div>
    <script>
        function checkPasswordMatch() {
    var password = $("#exampleInputPassword1").val();
    var confirmPassword = $("#exampleInputPassword2").val();

    if (password != confirmPassword)
        $("#divCheckPasswordMatch").html("Passwords do not match!");
    else
        $("#divCheckPasswordMatch").html("Passwords match.");
}
    </script>
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