 <?php

include 'head.php';
include 'navbar.php';

include 'dbcon.php';
 ?>

 <!--  ************************* Page Title Starts Here ************************** -->
        
    <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2>Sponser Causes</h2>
                <ul>
                    <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i> About Us</li>
                </ul>
            </div>
        </div>
    </div>
    
    
   
  <!-- ################# Events Start Here#######################--->
    <section class="events">
        <div class="container">
           
            <div class="event-ro row">
                <?php
    $selecte = "SELECT * FROM `sponser`";
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
                        <button class="btn btn-success btn-sm">Donate Now</button>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>   
    <?php

include 'footer.php';


    ?>
      
       
  