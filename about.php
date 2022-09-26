 <?php

include "head.php";
include "navbar.php";

 ?>

 <!--  ************************* Page Title Starts Here ************************** -->
        
    <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2>About Our Charity</h2>
                <ul>
                    <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i> About Us</li>
                </ul>
            </div>
        </div>
    </div>
    
    
     <!--  ************************* About Us Starts Here ************************** -->    
    <?php include 'dbcon.php'; ?>   
<div class="about-us container-fluid">
    <div class="container">
<?php $select="SELECT * FROM `about` limit  3";
      $query=mysqli_query($con,$select);
      while ($row = mysqli_fetch_assoc($query)) {
         
        ?>
        <div class="row natur-row no-margin w-100">
            <div class="text-part col-md-6">
                <h2><?php echo $row['title']; ?></h2>
                <p><?php echo $row['des']; ?></p>
                <!-- <p> Cras faucibus laoreet nibh, sit amet tincidunt leo mollis in. Etiam eu mauris metus.
                    Nulla facilisi. Etiam vestibulum,
                    nisi et convallis elementum, leo orci aliquam metus, id posuere massa neque vitae
                    arcu.</p>

                <p>Integer vulputate vehicula dolor a eleifend. Duis aliquam condimentum sapien,
                    eget tempor justo. Aenean porttitor nibh metus, sollicitudin egestas metus posuere et
                    . Fusce egestas volutpat metus, in sodales sem bibendum porta. Nunc hendrerit nunc sit
                    amet tellus posuere, at malesuada sem gravida. Integer maximus ultricies augue, at
                    dapibus elit bibendum consequat. Cras faucibus tellus eleifend, fermentum purus in,
                    dapibus sapien. Praesent nec ornare risus. Etiam iaculis, ligula vel gravida
                    vestibulum, urna justo posuere ante,
                    id pretium massa arcu sed mi. Nunc a sollicitudin sem. Duis tempus </p> -->
            </div>
        <?php } ?>
            <div class="image-part col-md-6">
                <div class="about-quick-box row">
                    <div class="col-md-6">
                        <div class="about-qcard">
                           <i class="fas fa-user"></i>
                            <p>Becom a Volunteer</p>
                        </div>
                    </div>
                     <div class="col-md-6">
                        <div class="about-qcard ">
                           <i class="fas fa-search-dollar red"></i>
                            <p>Quick Fundrais</p>
                        </div>
                    </div>
                     <div class="col-md-6">
                        <div class="about-qcard ">
                           <i class="fas fa-donate yell"></i>
                            <p>Giv Donation</p>
                        </div>
                    </div>
                     <div class="col-md-6">
                        <div class="about-qcard ">
                           <i class="fas fa-hands-helping blu"></i>
                            <p>Help Someone</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>     
   
   
    
 <!-- ################# Mission Vision Start Here #######################--->
  
  <section class="container-fluid mission-vision">
      <div class="container">
          <div class="row mission">
            <?php $select="SELECT * FROM `mission` limit  3";
      $query=mysqli_query($con,$select);
      while ($row = mysqli_fetch_assoc($query)) {
         
        ?>
              <div class="col-md-6 mv-det">
                  <h1><?php echo $row['title'];?></h1>
                  <p><?php echo $row['des'];?></p>
              </div>
              <div class="col-md-6 mv-img">
                  <img src="admin/<?php echo $row['image'];?>" alt="">
              </div>
          <?php } ?>
          </div>
          <div class="row vision">
             <?php $select="SELECT * FROM `vision` limit  3";
      $query=mysqli_query($con,$select);
      while ($row = mysqli_fetch_assoc($query)) {
         
        ?>
              <div class="col-md-6 mv-img">
                   <img src="admin/<?php echo $row['image'];?>" alt="">
              </div>
              <div class="col-md-6 mv-det">
                   <h1><?php echo $row['title'];?></h1>
                   <p><?php echo $row['des'];?></p>
              </div>
          <?php } ?>
          </div>
      </div>
  </section>   
   
  <?php
include "footer.php";


?>