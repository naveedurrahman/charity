 <?php
include "head.php";
include "navbar.php";

 ?>
 <!--  ************************* Page Title Starts Here ************************** -->
  
 <?php
  include 'dbcon.php';

    if (isset($_POST['submit'])) {
    
     
       $name = $_POST['name'];
       
     
      $city = $_POST['city'];
      
        $amount = $_POST['amount']; 
        $phone = $_POST['phone']; 
        $email = $_POST['email']; 
     

      

      
     $query = "INSERT INTO `quick`(`name`,`city`,`amount`,`phone`,`email`) VALUES ('$name','$city','$amount','$phone','$email')";
      
    
      $result = mysqli_query($con,$query);
      
     if ($result==true) {
      $_SESSION['success_msg'] = "Your Record is updated successfully";
      ?>
    <script>window.open('quick.php','_self');</script>
      <?php
    }
    else
    {
      $_SESSION['error_msg'] = "Your Record is not updated there is some error";
      ?>
    <script>window.open('quick.php','_self');</script>
      <?php
    }
  }
?>      
    <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2>Quick Fundrais</h2>
                <ul>
                    <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i> Quick Fundrais</li>
                </ul>
            </div>
        </div>
    </div>
    
    
   
  <!--  ************************* Contact Us Starts Here ************************** -->


   

    <div class="row contact-rooo no-margin">
        <div class="container">
            <div class="row">


                <div style="padding:20px" class="col-sm-12">
                    <h2 style="text-align: center;">Quick Fundrais</h2> <br>
                     <form enctype="multipart/form-data" method="POST">
                    <div class="row cont-row">

                        <div  class="col-sm-3"><label>Name </label><span>:</span></div>
                        <div class="col-sm-8"><input type="text" placeholder="Enter Name" name="name" class="form-control input-sm" required ></div>
                    </div>
                    <div class="row cont-row">

                        <div  class="col-sm-3"><label> City </label><span>:</span></div>
                        <div class="col-sm-8"><input type="text" placeholder="Enter city" name="city" class="form-control input-sm" required ></div>
                    </div>
                    <div  class="row cont-row">
                        <div  class="col-sm-3"><label>Email Address </label><span>:</span></div>
                        <div class="col-sm-8"><input type="email" name="email" placeholder="Enter Email Address" class="form-control input-sm"  required></div>
                    </div>
                    <div  class="row cont-row">
                        <div  class="col-sm-3"><label>Mobile Number</label><span>:</span></div>
                        <div class="col-sm-8"><input type="tel" name="phone" pattern="[0-9]{4}-[0-9]{7}" placeholder="Format: 0315-1207603" class="form-control input-sm" required ></div>
                    </div>
                    <div  class="row cont-row">
                        <div  class="col-sm-3"><label>Found Amount</label><span>:</span></div>
                        <div class="col-sm-8"><input type="tel" name="amount" placeholder="Enter Amount Here..." class="form-control input-sm" required ></div>
                    </div>
                    <!-- <div  class="row cont-row">
                        <div  class="col-sm-3"><label>Enter Message</label><span>:</span></div>
                        <div class="col-sm-8">
                            <textarea rows="5" placeholder="Enter Your Message" name="msg" class="form-control input-sm" required></textarea>
                        </div>
                    </div> -->
                    <div style="margin-top:10px;" class="row">
                        <div style="padding-top:10px;" class="col-sm-3"><label></label></div>
                        <div class="col-sm-8">
                            <button class="btn btn-primary btn-sm" name="submit">Submit</button>
                        </div>
                    </div>
                </form>
                </div>
               <!--  <div class="col-sm-5">

                    <div style="margin:50px" class="serv">





                        <h2 style="margin-top:10px;">Address</h2>

                       Antonya Street, <br>
                        23/H-2, Building<br>
                        TA, AUS District<br>
                        Phone:+91 9159669599<br>
                        Email:support@smarteyeapps.com<br>
                        Website:www.smarteyeapps.com.com<br>







                    </div>


                </div> -->

            </div>
        </div>

    </div>
       
       <?php


include "footer.php";
   ?>