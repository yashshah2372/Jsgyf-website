<?php 
	ob_start();
	session_start();
	include("db_connect.php");

    $member="Member";
    $query="SELECT * FROM Members WHERE designation NOT LIKE '%".$member."%' ";
    $result=mysqli_query($conn,$query);
    $rows=mysqli_fetch_all($result,MYSQLI_ASSOC);


	if (isset($_POST['logout'])) 
	{
		header("Location:userlogin.php");
		setcookie('user_id');
	}
	
	$rand=$_COOKIE['rand']??0;
	$_SESSION['rand']=$rand;
    // echo $_COOKIE['rand'];
	$sql="SELECT * FROM Members WHERE rand=$rand";
	$result=mysqli_query($conn,$sql);
	$singleRow=mysqli_fetch_assoc($result);
// 	echo $singleRow['firstName'];
    if($singleRow['firstName']!='')
    {
        $cookievalid='true';
    }
    else
    {
        $cookievalid='false';
    }
    
    if(isset($_POST['editprofile']))
    {
        setcookie('rand');
        header("Location:loginPage.php");
		
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>JSGYFME</title>
	<link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2:wght@500&family=Lobster&family=Raleway:wght@500&family=Rubik:wght@300&display=swap" rel="stylesheet">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Bazzuka.in-your perfect place to discover the most beautiful,creative and exquisite handmade products, and get them delivered at your doorstep! Explore our wide range of amazing handcrafted products like personalized gifts to surprise your loved ones, diwali diyas and lanterns that will render a colorful appeal to your house, and many more such mindblowing hand designed products that will definitely amaze you!!! Special Diwali offer-flat 50% off on all our products.">
    <meta name="keywords" content="Bazzuka, made in India products, handmade or handcrafted products, what shall i gift, personalized gifts, diwali diyas and lanterns, diwali gifts, birthday and anniversary gifts like cards, surprise with a gift">

	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>


	<style type="text/css">
		button, button:focus 
		{
		    outline: none !important;
		    box-shadow: none !important;
        }
        .navbar{
            color:#2E4C6D;
        }
        .scroll{
            overflow:hidden;
            height:150px;
        }
        .scroll:hover{
            max-height: 200px;
            overflow-y:scroll;
                        }
		.ralewayFont
		{
			font-family: 'Raleway', sans-serif;
		}
		.balooThambi2
		{
			font-family: 'Baloo Thambi 2', cursive;
		}
		.rubikFont
		{
			font-family: 'Rubik', sans-serif;
		}
		.lobsterFont
		{
			font-family: 'Lobster', cursive;
		}
		.color-primary 
		{
		    color: #003859;
		}

		.color-primary-bg 
		{
		    background: #003859;
		}

		.color-secondary 
		{
		    color: #00A5C4;
		}

		.color-secondary-bg 
		{
		    background: #00A5C4;
		}

		.color-yellow 
		{
		    color: #FFD289;
		}

		.color-yellow-bg 
		{
		    background: #FFD289;
		}

		.transparent
		{
			background-color:rgba(255, 255, 255, 0.50);
		}

.count{
    font-sixe:15px;
}

		.closebtn
		{
			position: absolute;
			  top: -12px;
			  right: 5px;
			  font-size: 36px;
			  /*margin-left: 50px;*/
		}
		 .carousel-inner
         {
           width:100%;
          /* height:auto;*/
           max-height: 500px !important;
           object-fit: cover;

         }
        
       .carousel-caption
       {
          position:absolute; 
          z-index:100;
          bottom:-30%;
          font-size:30px;
          margin-bottom:60px;
       }
       .carousel-caption-text
       {
           text-shadow: 0 0 5px white, 0 0 5px white;
           color:blue;
       }
       .carousel-subcaption-text
       {
           text-shadow: 0 0 3px white, 0 0 5px white;
           color:black;
       }
       .carousel-indicators li
       {
         width: 10px;
         height: 10px;
         border-radius: 100%;
        }

         .owl-carousel .item .product a
         {
            overflow: hidden;
         }
		 .owl-carousel .item .product img 
		{
		    transition: transform 0.2s ease;
		}
		 .owl-carousel .item .product img:hover 
		{
		    transform: scale(1.1);
		}
		 .owl-carousel .owl-nav button 
		{
		    position: absolute;
		    top: 30%;
		    outline: none;
		}
		 .owl-carousel .owl-nav button.owl-prev 
		{
		    left: 0;
		}
		 .owl-carousel .owl-nav button.owl-prev span,
		 .owl-carousel .owl-nav button.owl-next span 
		{
		    font-size: 35px;
		    color: #003859;
		    padding: 0 1rem;
		}
		 .owl-carousel .owl-nav button.owl-prev span 
		{
		    margin-left: 0rem;
		}
		 .owl-carousel .owl-nav button.owl-next 
		{
		    right: 0;
		}
		 .owl-carousel .owl-nav button.owl-next span 
		{
		    margin-right: 0rem;
		}
         .card-img-top
        {
            height:30vh;border-radius:10px 10px 0 0;
        }
        #topstrip
        {
        	height:30px;
        }
        #welcome-text
        {
        	font-size:18px;
        }
        .responsive1{
            text-align:center;
            margin:auto;
            margin-top:7px;
        }
   
        @property --num {
  syntax: "<integer>";
  initial-value: 0;
  inherits: false;
}

.counter-value
{
    font-size:80px;
    font-weight:bold;
}
 #asondate
        {
            position:absolute;top:50px;font-size:30px;color:white;font-weight:bold;position: absolute;
          top: 20%;
          left: 50%;
          transform: translate(-50%, -50%);
        }
        
        #counterimg
        {
            width:100%;height:45vh;filter: brightness(60%);object-fit:cover;
        }
        
        #counter
        {
            position:absolute;top:20%;width:100%;display:flex;align-items:center;justify-content:center;
        }
/*.incrementor {*/
/*  transition: --num 5s;*/
/*  counter-set: num var(--num);*/
/*  font: 800 40px system-ui;*/
/*}*/
/*.incrementor::after {*/
/*  content: counter(num);*/
/*}*/
/*.incrementor:hover {*/
/*  --num: 100;*/
/*}*/

      	 
      @media screen and (max-width: 769px) 
	   {
	       .owl-carousel .owl-nav button.owl-prev span 
		{
		    margin-left:0px;
		}
		 .owl-carousel .owl-nav button.owl-next 
		{
		    right: 0;
		}
		 .owl-carousel .owl-nav button.owl-next span 
		{
		    margin-right:0px;
		}
		.sidenav {padding-top: 15px;}
        .sidenav a {font-size: 18px;}
       
        #welcome-text
        {
        	font-size:11px;
        }
        #responsive
        {
            display:none;
        }
        .logo img{
           transform:translateX(100px);
            
        }
        .readMore1{
                display:none;
                 }
         #more {
        display: none;
              }
        }
        @media screen and (min-width: 765px)
        {
            .readMore{
            display:none;
                      }
        }
         @media screen and (max-width: 1300px) {
          .logo img{
           transform:translateX(75px);
           max-width:220px;
           max-height:220px;
        top:35px;
        }
        @media screen and (max-width: 1050px) {
          .logo img{
           transform:translateX(75px);
           max-width:220px;
           max-height:220px;
        top:35px;
        }
        @media screen and (max-width: 991px) {
          .logo img{
           transform:translateX(375px);
           max-width:220px;
           max-height:220px;
        top:35px;
        }
         @media screen and (max-width: 769px) {
          .logo img{
           transform:translateX(475px);
           max-width:220px;
           max-height:220px;
        top:35px;
        }
                 .count{
            font-size:20px;
        }
        #members{
             font-size:32px;
        }
        #committee{
            margin-top:25px;
            font-size:32px;
        }
         #events{
            font-size:32px;
        }
         #socialActivities{
            font-size:32px;
        }
        #asondate{
            margin-top:0px;
            font-size:23px;
        }
        @media screen and (max-width: 550px) {
          .logo img{
           transform:translateX(420px);
           max-width:170px;
           max-height:170px;
        top:35px;
        }
        .text h1{
            font-size:21px;
        }  
         .text h3{
            font-size:17px;
        }
        }
        @media screen and (max-width: 450px) {
          .logo img{
           transform:translateX(320px);
           max-width:170px;
           max-height:170px;
           top:35px;
        }
        .count{
            font-size:13px;
        }
        #members{
            margin-top:10px;
             font-size:37px;
        }
        #committee{
            font-size:37px;
        }
         #events{
            font-size:37px;
        }
         #socialActivities{
            font-size:37px;
        }
        #asondate
        {
            position:absolute;font-size:20px;color:white;font-weight:bold;position: absolute;
          top: 5%;
          left: 50%;
          transform: translate(-50%, -50%);
          
          width:100%;
        }
        .scroll{
            overflow:hidden;
            height:110px;
        }
        .scroll:hover{
            max-height: 170px;
            overflow-y:scroll;
                        }
        .card-text
        {
            font-size:15px;
        }
        .counter-value
        {
            
            font-size:50px;
            font-weight:bold;
        }
        
        .committee-item
        {
           width: 11rem;height:40vh;border-radius:10px;
        }
        .card-img-top
        {
            height:21vh;border-radius:10px 10px 0 0;
        }
        .card-text
        {
            margin-top:-10px;
        }
        .item
        {
            margin:20px;
        }
        #counterimg
        {
            width:100%;height:65vh;filter: brightness(60%);object-fit:cover;
        }
        
        #counter
        {
            position:absolute;top:8%;width:100%;display:flex;align-items:center;justify-content:center;
        }
        .text h1{
            font-size:21px;
        }  
         .text h3{
            font-size:17px;
        }  
        }
        @media screen and (max-width: 380px) {
          .logo img{
           transform:translateX(290px);
           max-width:160px;
           max-height:160px;
        top:35px;
        }
            .count{
            font-size:13px;
        }
        #members{
            margin-top:7px;
             font-size:30px;
        }
        #committee{
            font-size:30px;
        }
         #events{
            font-size:30px;
        }
         #socialActivities{
            font-size:30px;
        }
        .text h1{
            font-size:19px;
        }  
         .text h3{
            font-size:15px;
        }
        }
         @media screen and (max-width: 330px) {
          .logo img{
           transform:translateX(273px);
           max-width:135px;
           max-height:135px;
        top:35px;
        }
                  .count{
            font-size:13px;
        }
        #members{
            margin-top:6px;
             font-size:22px;
        }
        #committee{
            font-size:22px;
        }
         #events{
            font-size:22px;
        }
         #socialActivities{
            font-size:22px;
        }
        #asondate{
            font-size:13px;
        }
        .text h1{
            font-size:19px;
        }  
         .text h3{
            font-size:14px;
        }
         }
         @media screen and (max-width: 300px) {
          .logo img{
           transform:translateX(260px);
           max-width:115px;
           max-height:115px;
        top:35px;
        }
             .text h1{
            font-size:15px;
        }  
         .text h3{
            font-size:13px;
        }
         }

       

	</style>
</head>
<body id="body">
<?php
    ob_start();
	include("db_connect.php");
	
// 	$query="SELECT * FROM Members";
//     $result=mysqli_query($conn,$query);
//     $Rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
    
//     foreach($Rows as $row)
//     {
//         echo $row['name'];
//     }

?>

	<!--header-->
		  <?php
		  	

		  //	//$user_id=$_SESSION['user_id'];
		  //	$user_id=$_COOKIE['user_id']??0;
		  //	//echo $user_id; 

		  //	if ($user_id!=0)
		  //	{
		  //		//header('Location:userlogin.php');
		  //		$sql="SELECT * FROM users WHERE user_id=$user_id";
				// $result=mysqli_query($conn,$sql);
				// $singleRow=mysqli_fetch_assoc($result);//fetches a single row as an array

				// $_SESSION['user_email']=$singleRow['email'];
				// $_SESSION['user_name']=$singleRow['firstName'];
				// $_SESSION['contact_number']=$singleRow['contact_number'];
		  //	}

		  ?>	
		  
		   


        <!--------->
        	<?php //include("navbar.php"); ?>
        <!--------->
            <?php include("nav.php"); ?>
        
        
        
        
        
        
        
        
       <!---------->


       <main>
       			

					



       			
       	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />		
       			
          <!--Carousel-->
          <section id="eventscarousel">
	          <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel"  >
				    <ol class="carousel-indicators">
				        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
				    </ol>
		        <div class="carousel-inner ">
		            
		   <div class="carousel-item active">
		            <a href="#"><picture class="d-block bg-dark">
					  <source media="(max-width:650px)" srcset="./assets/Event00001.png">
					  <source media="(min-width:465px)" srcset="./assets/POSTER_01.png" >
					  <!--<img src="./assets/topcarousel/gift.jpg" alt="Gifts" class="d-block w-100 " style="width:100%;object-fit: cover;">-->
					  <img src="./assets/Event00001.png" alt="Gifts" class="d-block w-100 " style="width:100%;object-fit: cover;">
					</picture></a>
				<div class="text row carousel-caption">
        		     <div class="responsive1 d-sm-block d-md-none d-xs-block">
        		         <h1 class="animate__animated animate__fadeInLeftBig carousel-caption-text" style="">Installation Ceremony</h1>
                            <h3 class="animate__animated animate__fadeInRightBig carousel-subcaption-text">9th October 2021</h3>
        		     </div>
		        </div>
		   </div>
		          <div class="carousel-item">
		            <a href="#"><picture class="d-block bg-dark">
					  <source media="(max-width:650px)" srcset="./assets/Event2.jpeg">
					  <source media="(min-width:465px)" srcset="./assets/POSTER_2.png" >
					  <!--<img src="./assets/topcarousel/gift.jpg" alt="Gifts" class="d-block w-100 " style="width:100%;object-fit: cover;">-->
					  <img src="./assets/Event2.jpeg" alt="Gifts" class="d-block w-100 " style="width:100%;object-fit: cover;">
					</picture></a>
						<div class="text row carousel-caption">
        		     <div class="responsive1 d-sm-block d-md-none d-xs-block">
        		         <h1 class="animate__animated animate__fadeInLeftBig carousel-caption-text" style="">Donation Drive</h1>
                            <h3 class="animate__animated animate__fadeInRightBig carousel-subcaption-text">24th October 2021</h3>
        		     </div>
		        </div>
		          </div>
		          
		          <div class="carousel-item">
		            <a href="#"><picture class="d-block bg-dark">
					  <source media="(max-width:650px)" srcset="./assets/event3.jpeg">
					  <source media="(min-width:465px)" srcset="./assets/POSTER3.png" >
					  <!--<img src="./assets/topcarousel/gift.jpg" alt="Gifts" class="d-block w-100 " style="width:100%;object-fit: cover;">-->
					  <img src="./assets/event3.jpeg" alt="Gifts" class="d-block w-100 " style="width:100%;object-fit: cover;">
					</picture></a>
						<div class="text row carousel-caption">
        		     <div class="responsive1 d-sm-block d-md-none d-xs-block">
        		         <h1 class="animate__animated animate__fadeInLeftBig carousel-caption-text" style="">Treasure Hunt</h1>
                            <h3 class="animate__animated animate__fadeInRightBig carousel-subcaption-text">14th November 2021</h3>
        		     </div>
		        </div>
		          </div>
		          
		          	<div class="carousel-item">
		            <a href="#"><picture class="d-block bg-dark">
					  <source media="(max-width:650px)" srcset="./assets/event4.jpeg">
					  <source media="(min-width:465px)" srcset="./assets/POSTER4.png" >
					  <!--<img src="./assets/topcarousel/gift.jpg" alt="Gifts" class="d-block w-100 " style="width:100%;object-fit: cover;">-->
					  <img src="./assets/event4.jpg" alt="Gifts" class="d-block w-100 " style="width:100%;object-fit: cover;">
					</picture></a>
						<div class="text row carousel-caption">
        		     <div class="responsive1 d-sm-block d-md-none d-xs-block">
        		         <h1 class="animate__animated animate__fadeInLeftBig carousel-caption-text" style="">Star Gazing </h1>
                            <h3 class="animate__animated animate__fadeInRightBig carousel-subcaption-text">11th December 2021</h3>
        		     </div>
		        </div>
		          </div>
		          
		       </div>
		    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
		        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		        <span class="sr-only">Previous</span>
		    </a>
		    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
		        <span class="carousel-control-next-icon" aria-hidden="true"></span>
		        <span class="sr-only">Next</span>
		    </a>
		     <div class="row">
		  <!--   <div class="carousel-caption left-caption text-left"id="responsive">-->
		  <!--       <h1 class="animate__animated animate__fadeInLeftBig">Welcome to Yuva forum MetroElite.</h1>-->
    <!--              <h3 class="animate__animated animate__fadeInRightBig">Upcoming events!!!</h3>-->
                    
		  <!--</div>-->
		  </div>
		  <div class="text row carousel-caption">
		  <!--   <div class="responsive1 d-sm-block d-md-none d-xs-block">-->
		  <!--       <h1 class="animate__animated animate__fadeInLeftBig">Welcome to Yuva forum MetroElite.</h1>-->
    <!--                <h3 class="animate__animated animate__fadeInRightBig">Upcoming events!!!</h3>-->
		  <!--</div>-->

		  </div>
		 </div> 
	</section>	  

	 <section id="about">
        <nav class="navbar navbar-light"style="background-color:#125B98;color:white">
            <span class="navbar-brand mb-0 h1"style="color:white">About</span>
        </nav>
        <div class="mx-3 my-2 readMore" style="font-size:18px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<span id="dots">...</span><span id="more">It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span>

         <p onclick="readmore()" style="color:blue" id="myBtn">Read more</p>
</div>
<div class="mx-3 my-2 readMore1" style="font-size:18px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
</div>
		 </section>
  <section id="committee"> 
   <nav class="navbar navbar-light" style="background-color:#125B98">
            <span class="navbar-brand mb-0 h1"style="color:white">Know your committee</span>
   </nav>
   
  <div class="owl-carousel owl-theme">
<?php foreach($rows as $row) { ?>      
   <div class="mx-3 ">
       <div class="card m-3 committee-item">
          <img class="card-img-top" src="<?php echo $row['photo']; ?>" alt="Card image cap">
          <div class="mt-2 ml-2">
            <h5 class="card-title"><?php echo $row['designation']; ?></h5>
            <p class="card-text scroll">
                         Age:<?php echo " ".$row['age']; ?><br>
                Birthdate:<?php echo " ".$row['birthdate']; ?><br>
                Profession:<?php echo " ".$row['profession']; ?><br>
                Phone:<?php echo " ".$row['phone_number']; ?><br>
                <?php if($row['insta_id']!=''){ ?>
                Instagram:<?php echo " ".$row['insta_id']; ?><br>
                <?php } ?>
                <?php if($row['linkedIn']!=''){ ?>
                LinkedIn:<?php echo " ".$row['linkedIn']; ?><br>
                <?php } ?>
                <?php if($row['website']!=''){ ?>
                Website:<?php echo " ".$row['website']; ?><br>
                <?php } ?>
                Hobbies:<?php echo " ".$row['hobbies']; ?><br>
                Description:<?php echo " ".$row['description']; ?><br>
            </p>

          </div>
        </div>
   </div>
   <?php } ?>
   
</div>
</section>

<section id="footersection">
<div class="bg-light" style="position: relative;
  text-align: center;">
    <!--<img src="https://www.adidas-group.com/media/filer_public_thumbnails/filer_public/fb/98/fb98c75c-f68b-4f7d-b694-ece66bcc4af1/teaser_hr_startseite_1.jpg__1550x443_q85_crop-smart_subsampling-2.jpg" class="img-fluid" -->
    <!--id="counterimg">-->
        <img src="./assets/counterpic.png" class="img-fluid" 
    id="counterimg">
    <div id="asondate"></div>
  
  <div class="count row text-white" id="counter" >
      <div class="col-md-3">
          <div class="counter-value" id="members" data-count="135">0</div><br>
          <label for="members">Members</label>
      </div>
     <div class="col-md-3">
         <div class="counter-value" id="committee" data-count="11">0</div><br>
         <label for="committee">Committee Members</label>
     </div> 
    <div class="col-md-3">
        <div class="counter-value" id="events" data-count="4">0</div><br>
        <label for="events">Events done</label>
    </div>
    <div class="col-md-3">
        <div class="counter-value" id="socialActivities" data-count="1">0</div><br>
        <label for="events">Social Activities</label>
    </div>
    
      
  </div>
</div>

<!--<div id="counter">-->
<!--    <div class="counter-value" data-count="300">0</div>-->
<!--    <div class="counter-value" data-count="400">100</div>-->
<!--    <div class="counter-value" data-count="1500">200</div>-->
<!--</div>-->

<?php include("footer.php"); ?>
</section>

</main>

	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous"></script>

    <!-- Custom Javascript -->
    <script src="index.js"></script>

    <script>
    function readmore() {
            // alert("fdhn");
            var dots = document.getElementById("dots");
            var moreText = document.getElementById("more");
            var btnText = document.getElementById("myBtn");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read more";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Read less";
                moreText.style.display = "inline";
            }
        }
   
            const sections = document.querySelectorAll("section");
const navLi = document.querySelectorAll("nav .container ul li");
window.addEventListener("scroll", () => {
  let current = "";
  sections.forEach((section) => {
    const sectionTop = section.offsetTop;
    const sectionHeight = section.clientHeight;
    if (pageYOffset >= sectionTop - sectionHeight / 3) {
      current = section.getAttribute("id");
    }
  });

  navLi.forEach((li) => {
    li.classList.remove("active");
    if (li.classList.contains(current)) {
      li.classList.add("active");
    }
  });
});

var a = 0;
$(window).scroll(function() {

  var oTop = $('#counter').offset().top - window.innerHeight;
//   alert(oTop);
  if (a == 0 && $(window).scrollTop() > oTop+200) {
    $('.counter-value').each(function() {
      var $this = $(this),
        countTo = $this.attr('data-count');
      $({
        countNum: $this.text()
      }).animate({
          countNum: countTo
        },

        {

          duration: 2000,
          easing: 'swing',
          step: function() {
            $this.text(Math.floor(this.countNum));
          },
          complete: function() {
            $this.text(this.countNum);
            //alert('finished');
          }

        });
    });
    a = 1;
  }

});
        
        n =  new Date();
        y = n.getFullYear();
        m = n.getMonth() + 1;
        d = n.getDate();
        document.getElementById("asondate").innerHTML ="Our youth forum as on "+ m + "/" + d + "/" + y;
        // alert( m + "/" + d + "/" + y);
        
            
            function myFunction(x) {
              if (x.matches) { // If media query matches
                $("#committee .owl-carousel").owlCarousel({
                loop: true,
                nav: true,
                responsiveClass:true,
                lazyLoad:true,
                dots: false,
                // autoplay:true,
                // smartSpeed: 500,
                // autoplayTimeout:2000,
                // autoplayHoverPause:true,
                responsive : {
                    0: {
                        items: 2
                    },
                    600: {
                        items: 5
                    },
                    1000 : {
                        items: 5
                    }
                }
            });
            

              } 
              else
              {
                              	    $("#committee .owl-carousel").owlCarousel({
                loop: true,
                nav: true,
                responsiveClass:true,
                lazyLoad:true,
                dots: false,
                // autoplay:true,
                // smartSpeed: 500,
                // autoplayTimeout:2000,
                // autoplayHoverPause:true,
                responsive : {
                    0: {
                        items: 2
                    },
                    600: {
                        items: 5
                    },
                    1000 : {
                        items: 2
                    }
                }
            });
            

              }
            }
            
            var x = window.matchMedia("(min-width: 700px)")
            myFunction(x) // Call listener function at run time
            x.addListener(myFunction) 


    </script>
</body>
</html>