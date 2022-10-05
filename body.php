 <?php include 'dbcon.php'; ?>
 <!-- ******************** Slider Starts Here ******************* -->
    <div class="slider">
        <!-- Set up your HTML -->
        <div class="owl-carousel ">
                   <?php $select="SELECT * FROM `slider` limit  3";
      $query=mysqli_query($con,$select);
      while ($row = mysqli_fetch_assoc($query)) {
         
        ?>
            <div class="slider-img">
                
                <div class="item">
             
                    <div class="slider-img">
                        <img src="admin/<?php echo $row['image']; ?>" alt="">
                    </div>
                    <div class="container">
                        <div class="row">

                            <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                                <div class="animated bounceInDown slider-captions">
                                    <h1 class="slider-title"><?php echo $row['title']; ?></h1>
                                    <p class="slider-text hidden-xs"><?php echo $row['des']; ?></p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>

            </div>
            
            
<?php } ?>
        </div>
    </div>                 
                  
 <!--  ************************* About Us Starts Here ************************** -->    
       
<div class="about-us container-fluid">
    <div class="container">
  <?php $select="SELECT * FROM `about` limit  3";
      $query=mysqli_query($con,$select);
      while ($row = mysqli_fetch_assoc($query)) {
         
        ?>
        <div class="row natur-row no-margin w-100">
            <div class="text-part col-md-6">
                <h2><?php echo $row['title']; ?></h2>
                <p><?php echo $row['des']; ?> </p>
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
                          <a href="become.php"> <i class="fas fa-user"></i>
                          <!--  <img src="pic/vision.jpg"> -->
                            <p>Becom a Volunteer</p></a>
                        </div>
                    </div>
                     <div class="col-md-6">
                        <div class="about-qcard ">
                          <a href="quick.php"> <i class="fas fa-search-dollar red"></i>
                            <p>Quick Fundrais</p></a>
                        </div>
                    </div>
                     <div class="col-md-6">
                        <div class="about-qcard ">
                          <a href="give.php"> <i class="fas fa-donate yell"></i>
                            <p>Give Donation</p></a>
                        </div>
                    </div>
                     <div class="col-md-6">
                        <div class="about-qcard ">
                          <a href="help.php"> <i class="fas fa-hands-helping blu"></i>
                            <p>Help Someone</p></a>
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
   

    
     <!-- ################# Events Start Here#######################--->
    <section class="events">
        <div class="container">
            <div class="session-title row">
                <h2>Sponsor Causes</h2>
                <p>We are a non-profital & Charity raising money for child education</p> 
            </div>
            <div class="event-ro row">
                <?php
    $selecte = "SELECT * FROM `sponser` ORDER BY rand() limit  3";
                $result1 = mysqli_query($con, $selecte);
                 
                while ($row = mysqli_fetch_assoc($result1)) {
                    # code...
              
                
                ?>
                <div class="col-md-4 col-sm-6">
                    <div class="event-box">
                        <img src="admin/<?php echo $row['image'];?>" alt="">
                        <h4><?php echo $row['title'];?></h4>
                        
                        <p class="raises"><span><?php echo $row['price'];?></span> </p>
                        <p class="desic"><?php echo $row['des'];?></p>
                        <a href="give.php"><button class="btn btn-success btn-sm">Donate Now</button></a>
                    </div>
                </div>
                <!-- <div class="col-md-4 col-sm-6">
                    <div class="event-box">
                        <img src="assets/images/events/image_06.jpg" alt="">
                        <h4>Child Education in Africa</h4>
                        <p class="raises"><span>Raised : $34,425</span> / $500,000 </p>
                        <p class="desic">Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ipsum has been the industry's </p>
                        <button class="btn btn-success btn-sm">Donate Now</button>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="event-box">
                        <img src="assets/images/events/image_04.jpg" alt="">
                        <h4>Child Education in Africa</h4>
                        <p class="raises"><span>Raised : $34,425</span> / $500,000 </p>
                        <p class="desic">Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ipsum has been the industry's </p>
                        <button class="btn btn-success btn-sm">Donate Now</button>
                    </div>
                </div> -->
           <?php } ?> </div>

        </div>
    </section>   
    

   
   
    <!-- ################# Charity Number Starts Here#######################--->


    <div class="doctor-message">
        <div class="inner-lay">
            <div class="container">
               <div class="row session-title">
                   <h2>Our Achievemtns in Numbers</h2>
                   <p>We can talk for a long time about advantages of our Dental clinic before other medical treatment facilities.
But you can read the following facts in order to make sure of all pluses of our clinic:</p>
               </div>
                <div class="row">
                    <div class="col-sm-3 numb">
                        <h3>12+</h3>
                        <span>YEARS OF EXPEREANCE</span>
                    </div>
                    <div class="col-sm-3 numb">
                        <h3>1812+</h3>
                        <span>HAPPY CHILDRENS</span>
                    </div>
                    <div class="col-sm-3 numb">
                        <h3>52+</h3>
                        <span>EVENTS</span>
                    </div>
                    <div class="col-sm-3 numb">
                        <h3>48+</h3>
                        <span>FUNT RAISED</span>
                    </div>
                </div>
            </div>

        </div>

    </div> 
         
    <!--################### Our Team Starts Here #######################--->
          <!-- <section class="our-team team-11">
            <div class="container">
                <div class="session-title row">
                      <h2>Meet our Team</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce fringilla vel nisl a dictum. Donec ut est arcu. Donec hendrerit velit</p>
                </div>
                <div class="row team-row">
                    <div class="col-md-3 col-sm-6">
                        <div class="single-usr">
                            <img src="assets/images/team/team-memb1.jpg" alt="">
                            <div class="det-o">
                                <h4>David Kanuel</h4>
                                <i>CEO </i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-usr">
                            <img src="assets/images/team/team-memb2.jpg" alt="">
                            <div class="det-o">
                                <h4>David Kanuel</h4>
                                <i>CFO</i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-usr">
                            <img src="assets/images/team/team-memb3.jpg" alt="">
                            <div class="det-o">
                                <h4>David Kanuel</h4>
                                <i>Team Leader</i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-usr">
                            <img src="assets/images/team/team-memb4.jpg" alt="">
                            <div class="det-o">
                                <h4>David Kanuel</h4>
                                <i>Project Manager</i>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>       -->
         
          
    
    <!-- ################# Our Blog Starts Here#######################--->

    <section class="our-blog">
         	<div class="container">
         		<div class="row session-title">
        			<h2> Our Event Videos </h2>
        			<p>Take a look at what people say about US </p>
        		</div>
        		<div class="blog-row row">
        			<div class="col-md-4 col-sm-6">
        				<div class="single-blog">
        					<figure>
        						<!-- <img src="assets/images/events/image_01.jpg" alt=""> -->
                                <video controls width="360px" height="230px">
                                    <source src="assets/videos/video1.mp4" type="video/mp4">
                                </video>
        					</figure>
        					<div class="blog-detail">
        						<small>By Admin | August 10 2018</small>
								<h4>Methods of Recuirtments</h4>
								<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam justo neque, aliquet sit amet elementum vel, vehicula eget eros. Vivamus arcu metus, mattis sed sagittis at, sagittis quis neque. Praesent.</p>
								<div class="link">
									<a href="">Read more </a><i class="fas fa-long-arrow-alt-right"></i>
								</div>
        					</div>
                            
        					
        					
        				</div>
        			</div>
        			<div class="col-md-4 col-sm-6">
        				<div class="single-blog">
        					<figure>
        						<video controls width="360px" height="230px">
                                    <source src="assets/videos/video2.mp4" type="video/mp4">
                                </video>
        					</figure>
        					<div class="blog-detail">
        						<small>By Admin | August 10 2018</small>
								<h4>Methods of Recuirtments</h4>
								<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam justo neque, aliquet sit amet elementum vel, vehicula eget eros. Vivamus arcu metus, mattis sed sagittis at, sagittis quis neque. Praesent.</p>
								<div class="link">
									<a href="">Read more </a><i class="fas fa-long-arrow-alt-right"></i>
								</div>
        					</div>
        					
        					
        				</div>
        			</div>
        			<div class="col-md-4 col-sm-6">
        				<div class="single-blog">
        					<figure>
        						<video controls width="360px" height="230px">
                                    <source src="assets/videos/video3.mp4" type="video/mp4">
                                </video>
        					</figure>
        					<div class="blog-detail">
        						<small>By Admin | August 10 2018</small>
								<h4>Methods of Recuirtments</h4>
								<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam justo neque, aliquet sit amet elementum vel, vehicula eget eros. Vivamus arcu metus, mattis sed sagittis at, sagittis quis neque. Praesent.</p>
								<div class="link">
									<a href="">Read more </a><i class="fas fa-long-arrow-alt-right"></i>
								</div>
        					</div>
        					
        					
        				</div>
        			</div>
        		</div>
         	</div>
         </section>