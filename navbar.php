<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
<style type="text/css">
	.vertical-center {
  /*margin: 0;*/
  position: absolute;
  top: 50%;
  /*-ms-transform: translateY(-50%);
  transform: translateY(-50%);*/
}
.center {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 40px;
}
  .navbar-brand
  {
  	font-size:30px;
  	font-weight:bold;
  }
  .dancingfont
  {
  	font-family: 'Dancing Script', cursive;
  }
  .cart-basket {
  font-size: .6rem;
  position: absolute;
  top: 10px;
  right: 6px;
  width: 25px;
  height: 25px;
  color: #fff;
  background-color:rgba(0, 0, 0, 0.10);
  border-radius: 50%;
}
 .searchbox
 {
 	width: 250px;

 }
 .sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  /*background-color: #111;*/
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  
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
#sidenavbtn
{
	margin-right:18px;
	font-size:30px;
}
#navbar
{
	height:72px;
}
#search
{
	font-size:15px;
}
#carticon
{
	font-size:27px;
}
#bask
{
	padding-top:15px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
  @media screen and (max-width:600px) {
  	.center {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 30px;
}
  	#bask
	{
		padding-top:9px;
	}
	.cart-basket {
  font-size: .6rem;
  position: absolute;
  top: 5px;
  right: 6px;
  width: 25px;
  height: 25px;
  color: #fff;
  background-color:rgba(0, 0, 0, 0.10);
  border-radius: 50%;
}
  	#carticon
	{
		font-size:22px;
	}
  	#search
	{
		font-size:10px;
	}
  	#navbar
	{
		height:58px;
	}
  	#sidenavbtn
	{
		font-size:24px;
	}

  	.navbar-brand
  {
  	font-size:24px;
  	font-weight:bold;
  }
  .together {
  		 display:inline-block;
    }
    .nomargin{
    	margin:0 0 0 0;
    }
    .navbar-brand
  {
  	font-size:20px;
  }
  .searchbox
  {
  	width:130px;
  }
  #searchList
  {
  	width:50px;
  }

}
</style>
<?php
	
    $user_id=$_COOKIE['user_id']??0;
    $user_id=(int)$user_id;
	$basketItemID=array();
	if ($user_id!=0) 
	{
		$sqlBasket="SELECT * FROM basket WHERE userID=$user_id";
	    $resultBasket=mysqli_query($conn,$sqlBasket);
		$basketRows=mysqli_fetch_all($resultBasket,MYSQLI_ASSOC);

		foreach ($basketRows as $row)
	    {
	      	array_push($basketItemID,$row['item_id']);
		}

		$basketItemCount=count($basketRows);
	}
   
?>
<!--Navbar-->
        <div class="sticky-top">
          	<nav class=" strip d-flex p-2 shadow " id="navbar" style="background-color:#241f8c;" >
          					  <div id="mySidenav" class="sidenav bg-light">
				  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
				  <hr>
				  <a href="#" class="text-dark">About</a>
				 
				  
				  <hr>
				  <?php if($user_id!=0){ ?>
				  	<form method="POST">
				  		<button name="logout" class="btn btn-light text-dark text-left" style="font-size:25px; width:300px; padding: 8px 8px 8px 32px;">Logout</button>
				  	</form>
				  <?php }else{ ?>
				  <a href="userlogin.php" class="text-dark">Login</a>
				<?php } ?>
				  <hr>
				</div>
				<span style="cursor:pointer;color:white;" id="sidenavbtn" onclick="openNav()">&#9776;</span>
			  <a class="navbar-brand dancingfont together nomargin" href="#" id="brandname" style="color:white;margin:auto;">JSGYFME</a>

			  <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button> -->

			  
			   <!-- <div class="nav-item mx-3 " style="margin:auto;">
			        <a class="nav-link text-dark together nomargin" href="index.php"><i class="fas fa-home" id="home"></i>&nbsp;Home <span class="sr-only">(current)</span></a>
			      </div> -->

			    
			     <!---------->  
			  
			     
			  

			  <!--<div class="collapse navbar-collapse " id="navbarSupportedContent">
			   
			      <ul class="navbar-nav mr-auto">
			      <li class="nav-item dropdown mx-3">
			        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-tag"></i>
			          &nbsp;Products
			        </a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			          <a class="dropdown-item" href="#">Action</a>
			          <a class="dropdown-item" href="#">Another action</a>
			          <div class="dropdown-divider"></div>
			          <a class="dropdown-item" href="#">Something else here</a>
			        </div>
			      </li>
			      
			    </ul>
			    
			  </div>-->
			  
			  
			</nav>
			<!------------>
			
		<nav id="topstrip" class=" bg-warning px-3 ">
          <div class="d-flex mb-3">
            <span class="mx-3" style="color:white;">
              <a class="" style="text-decoration: none;color:white;font-size:18px;" href="#scrollspyHeading1">Events</a>
            </span>
            <span class="mx-3" style="color:white;">
              <a class="" style="text-decoration: none;color:white;font-size:18px;" href="#about">About</a>
            </span>
            <span class="mx-3" style="color:white;">
              <a class="" style="text-decoration: none;color:white;font-size:18px;" href="#committee">Committee</a>
            </span>
          </div>
        </nav>
	</div>		
			
			<script>
				function openNav() {
			  document.getElementById("mySidenav").style.width = "300px";
			  // document.body.style.backgroundColor = "rgba(220,220,220,0.4)";
			}

			function closeNav() {
			  document.getElementById("mySidenav").style.width = "0";
			  // document.body.style.backgroundColor = "white";
			}


			</script>