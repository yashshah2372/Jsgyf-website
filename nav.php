<?php ?>
<!DOCTYPE html>

	

	<style type="text/css">
	   
        .switchbaritem {
  height: 100vh;
  width: 100%;
  background-color: gray;
  display: flex;
  align-items: center;
  justify-content: center;
  text-transform: uppercase;
}
/*#home {*/
/*  background-color: royalblue;*/
/*}*/
/*#about {*/
/*  background-color: aquamarine;*/
/*}*/
/*#footer {*/
/*  background-color: crimson;*/
/*}*/
#navswitchbar {
  position: sticky;
  top: 0;
  z-index:50;
  background-color: white;
}

.navcontainerswitchbar {
    
    position:absolute;
    right:50px;
  width: 50%;
  /*max-width: 1000px;*/
  margin: 0 auto;
  text-align: center;
  padding: 10px;
  /*background-color:blue;*/
}
.navcontainerswitchbar ul li {
  display: inline-block;
}
.navcontainerswitchbar ul li a {
  display: inline-block;
  text-decoration: none;
  padding: 10px 20px;
  color: black;
}
.navcontainerswitchbar ul li a:hover {
 color:#125B98;
}
.navcontainerswitchbar ul li.active {
  /*background-color: crimson;*/
  border-bottom:3px solid #125B98;
  /*text-decoration: underline;*/
  /*text-decoration-color: crimson;*/
  /*transition: 0.3s ease crimson;*/
  transition:all 0.2s ease-in-out;
}
.navcontainerswitchbar ul li.active a {
  /*color: rgb(255, 255, 255);*/
  color:#125B98;
}

/* ********************* */
/* This Code is for only the floating card in right bottom corner */
/* ********************** */



/*a {*/
/*  padding: 0;*/
/*  margin: 0;*/
/*  color: var(--color-4);*/
/*  text-decoration: none;*/
/*}*/

 .sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  right: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}
.onlymobilenav
{
    display:none;
}
#ham
{
    display:none;
}
#profile
{
    display:block;
    font-size:32px;
    margin-right:15px;
    margin-top:-15px;
}

.dropdown {
  position: relative;
  display: inline-block;
}
.topBotomBordersOut{
    a:before
{
    top: 0px;
    transform: translateY(10px);
}
}
.topBotomBordersOut{
    a:after
{
    bottom: 0px;
    transform: translateY(-10px);
}
}

.dropdown-content {
  display: none;
  position: absolute;
  right:10px;
  background-color: white;
  border-radius:8px;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}


@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}

}

 
 @media screen and (max-width: 450px) 
 {
     #profile
     {
         display:none;
     }
     #ham
     {
         display:block;
     }
     #navswitchbar img{
    transform:translateX(-30px);
}
   .hidden
   {
       display:none;
   }
   .onlymobilenav
{
    display:block;
}
 }

	</style>

<body>

   <nav id="navswitchbar" class="navbar shadow-sm" style="background-color:white">
       <a href="" class="navbar-brand ml-5"><img src="./assets/logo.png"  style="width:75px;height:75px;"></a>
  <div class="container navcontainerswitchbar topBotomBordersOut">
    <ul class="hidden">
      <li class="eventscarousel active navcontainerswitchbaritem green borderXwidth"><a href="#eventscarousel">Events</a></li>
      <li class="about navcontainerswitchbaritem green borderXwidth"><a href="#about">About</a></li>
      <li class="committee navcontainerswitchbaritem"><a href="#committee">Committee</a></li>
      <li class="footersection navcontainerswitchbaritem"><a href="#footersection">Contact us</a></li>
      <li class="members navcontainerswitchbaritem"><a href="kym.php">Know your members</a></li>
      
    </ul>
  </div>
  
  
  
  <div class="dropdown">
  <i class="far fa-user-circle" id="profile"></i>
  <div class="dropdown-content">
      <a href="editProfile.php" class="text-center">Edit Profile</a>
    <hr>
  <?php
  
   if($cookievalid=='true'){
  ?>
  <a href="loginPage.php" class="text-center">Logout</a>
  <?php }else { ?>
  <a href="loginPage.php" class="text-center">Login</a>
  <?php } ?>
  </div>
</div>
  
  <span style="font-size:30px;cursor:pointer" id="ham" onclick="openNav()">&#9776;</span>
  <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="onlymobilenav">
       <a href="#eventscarousel" onclick="closeNav()">Events</a>
      <a href="#about" onclick="closeNav()">About</a>
      <a href="#committee" onclick="closeNav()">Committee</a>
      <a href="#footersection " onclick="closeNav()">Contact Us</a>
      <a href="kym.php" onclick="closeNav()">Know your members</a>
      
  </div>
  
  <a href="editProfile.php" >Edit Profile</a>
  <?php
  
   if($cookievalid=='true'){
  ?>
  <a href="loginPage.php">Logout</a>
  <?php }else { ?>
  <a href="loginPage.php">Login</a>
  <?php } ?>
</div>
  
  
</nav>
<!--<section class="switchbaritem" id="home">-->
<!--  <h1>Home</h1>-->
<!--</section>-->
<!--<section class="switchbaritem" id="about">-->
<!--  <h1>About</h1>-->
<!--</section>-->
<!--<section class="switchbaritem" id="contact">-->
<!--  <h1>Contact</h1>-->
<!--</section>-->
<!--<section class="switchbaritem" id="footer">-->
<!--  <h1>Footer</h1>-->
<!--</section>-->




	
    
    <script>
        
       function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

    </script>
</body>	
