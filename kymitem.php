  <!--<div class="m-3 item card">-->
  <!--     <div class=" committee-item">-->
  <!--        <img class="card-img-top" src="<?php echo $row['photo']; ?>" alt="Card image cap">-->
  <!--        <div class="card-body">-->
  <!--          <h5 class="card-title"><?php echo "Yuva ".$row['firstName']." ".$row['lastName']; ?></h5>-->
  <!--          <p class="card-text scroll">-->
  <!--              Age:<?php echo " ".$row['age']; ?><br>-->
  <!--              Birthdate:<?php echo " ".$row['birthdate']; ?><br>-->
  <!--              Profession:<?php echo " ".$row['profession']; ?><br>-->
  <!--              Phone:<?php echo " ".$row['phone_number']; ?><br>-->
  <!--              <?php if($row['insta_id']!=''){ ?>-->
  <!--              Instagram:<?php echo " ".$row['insta_id']; ?><br>-->
  <!--              <?php } ?>-->
  <!--              <?php if($row['linkedIn']!=''){ ?>-->
  <!--              LinkedIn:<?php echo " ".$row['linkedIn']; ?><br>-->
  <!--              <?php } ?>-->
  <!--              <?php if($row['website']!=''){ ?>-->
  <!--              Website:<?php echo " ".$row['website']; ?><br>-->
  <!--              <?php } ?>-->
  <!--              Hobbies:<?php echo " ".$row['hobbies']; ?><br>-->
  <!--              Description:<?php echo " ".$row['description']; ?><br>-->
  <!--          </p>-->

  <!--        </div>-->
  <!--      </div>-->
  <!-- </div>-->
   
   
   <div class="kymitem border " >
  <img class="card-img-top" src="<?php echo $row['photo']; ?>">
  <div class="card-body">
    <h5 class="card-title"><?php echo "Yuva ".$row['firstName']." ".$row['lastName']; ?></h5>
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
