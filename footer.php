 <!-- start #footer -->
 <footer id="footer" class="text-white mt-3 py-5"style="background-color:#7D7D7D">
    <div class="container">
        <div class="row">
            <div class=" logo col-lg-3 col-6">
                <img src="./assets/logo.png" style="width:250px;height:250px;position:absolute;left:-100px;">
                <!--JSGYFME-->
                   
            </div>
            <!--<div class="col-lg-4 col-12">-->
            <!--    <h4 class="font-rubik font-size-20">Newsletter</h4>-->
            <!--    <form class="form-row">-->
            <!--        <div class="col">-->
            <!--            <input type="text" class="form-control" placeholder="Email *">-->
            <!--        </div>-->
            <!--        <div class="col">-->
            <!--            <button type="submit" class="btn btn-primary mb-2">Subscribe</button>-->
            <!--        </div>-->
            <!--    </form>-->
            <!--</div>-->
            <div class="col-lg-2 col-12">
                <h4 class="font-rubik font-size-20">Information</h4>
                <div class="d-flex flex-column flex-wrap">
                    <!--<a href="#" class="font-rale font-size-14 text-white-50 pb-1">About Us</a>-->
                    <!--<a href="sellerregistration.php" class="font-rale font-size-14 text-white-50 pb-1">Sell</a>-->
                    <!--<a href="#" class="font-rale font-size-14 text-white-50 pb-1">Delivery Information</a>-->
                    <a href="PrivacyPolicy.html" class="font-rale font-size-14 text-white-50 pb-1">Privacy Policy</a>
                    <a href="TermsandConditions.html" class="font-rale font-size-14 text-white-50 pb-1">Terms & Conditions</a>
                </div>
            </div>
            <div class="col-lg-2 col-12">
                <h4 class="font-rubik font-size-20">Account</h4>
                <div class="d-flex flex-column flex-wrap">
                    <a href="orders" class="font-rale font-size-14 text-white-50 pb-1">Your Profile</a>
                </div>
            </div>
             <div class="col-lg-2 col-12">
                <h4 class="font-rubik font-size-20">Contact us</h4>
                <div class="d-flex flex-column flex-wrap">
                    <a href="mailto:support@bazzuka.in" class="font-rale font-size-14 text-white-50 pb-1">Mail</a>
                   <!--  <a href="#">Write to us</a> -->

                    <!-- Button trigger modal -->
                    <a type="" class=" font-rale font-size-14 text-white-50 pb-1 text-left" data-toggle="modal" data-target="#exa" style="cursor:pointer;">
                      Write to us
                    </a>

                    <!-- Modal -->
                    <div class="modal fade" id="exa" tabindex="-1" aria-labelledby="exampleMod" aria-hidden="true">
                      <div class="modal-dialog">
                        
                          <div class="modal-content">
                            <form method="POST" class="">
                                <textarea placeholder="Write here within 40 words..." class="mt-3" ></textarea>
                                <input type="text" name="writemessage">
                              <div class="modal-footer">
                                <button type="button" class="btn btn-primary" name="submitusermessage">Submit</button>
                              </div>
                            </form>
                         </div>
                      </div>
                    </div>    
                </div>
            </div>
        </div>
    </div>
</footer>
 <?php 
                            if (isset($_POST['submitusermessage'])) 
                            {
                                $userwritetousmsg=mysqli_escape_string($conn,$_POST['writemessage']);
                                $querywritetous = "INSERT INTO user_writetous(userID,message) VALUES ('$user_id','$userwritetousmsg')";
                                  if(mysqli_query($conn, $querywritetous))  
                                  {  
                                       echo '<script>alert("Image Inserted into Database")</script>';  
                                  }  
                            }
                           ?>
<div class="copyright text-center py-2"style="background-color:#7D7D7D">
    <h3 class="text-white">Get social with us on</h3>
	 <a href="instagram://user?username=bazzuka.in" class="font-rale text-white-50 pb-1 pr-1" style="font-size:35px;"><i class="fab fa-instagram"></i></a>
     <a href ="http://www.facebook.com/Bazzuka.in" class="font-rale text-white-50 pb-1" style="font-size:35px;"><i class="fab fa-facebook"></i></a> 
     <a href="https://wa.me/917744038933" class="font-rale text-white-50 pb-1" style="font-size:35px;"><i class="fab fa-whatsapp"></i></a>
    <p class="text-white-50 font-size-14">&copy; Copyrights 2021</p>
</div>
<!-- !footer -->
