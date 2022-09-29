  <?php
include "head.php";
include "navbar.php"; include 'dbcon.php';

  ?>

  <!--  ************************* Page Title Starts Here ************************** -->
        
    <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2>Our Gallery</h2>
                <ul>
                    <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i> Gallery</li>
                </ul>
            </div>
        </div>
    </div>
    
    
   
 <!--  ************************* Gallery Starts Here ************************** -->
        <div id="portfolio" class="gallery">    
           <div class="container">
              
              <div class="row">
                  <?php
    $selecte = "SELECT * FROM `gallery`";
                $result1 = mysqli_query($con, $selecte);
                 
                while ($row = mysqli_fetch_assoc($result1)) {
                    # code...
              
                
                ?>

        <!-- <div class="gallery-filter d-none d-sm-block">
            <button class="btn btn-default filter-button" data-filter="all">All</button>
            <button class="btn btn-default filter-button" data-filter="hdpe">Finance</button>
            <button class="btn btn-default filter-button" data-filter="sprinkle">Digital Marketing</button>
            <button class="btn btn-default filter-button" data-filter="spray"> Money</button>
            <button class="btn btn-default filter-button" data-filter="irrigation">Business Alaysis</button>
        </div> -->
        <br/>



            <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter hdpe">
                <img src="admin/<?php echo $row['image'];?>" class="img-responsive">
            </div>

            
<?php } ?>
            
        </div>
    
    </div>
       
       
       </div>
        <!-- ######## Gallery End ####### -->    
        <?php

include "footer.php";

    ?>