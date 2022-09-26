 <?php
include "head.php";
include "navbar.php";

 ?>
 <!--  ************************* Page Title Starts Here ************************** -->
  
 <?php
  include 'dbcon.php';

    if (isset($_POST['submit'])) {
    
     
       $subject = $_POST['subject'];
       
     
      $email = $_POST['email'];
      
        $msg = $_POST['msg']; 
        $phone = $_POST['phone']; 
     

      

      
     $query = "INSERT INTO `contact`(`subject`,`email`,`msg`,`phone`) VALUES ('$subject','$email','$msg','$phone')";
      
    
      $result = mysqli_query($con,$query);
      
     if ($result==true) {
      $_SESSION['success_msg'] = "Your Record is updated successfully";
      ?>
    <script>window.open('contact.php','_self');</script>
      <?php
    }
    else
    {
      $_SESSION['error_msg'] = "Your Record is not updated there is some error";
      ?>
    <script>window.open('contact.php','_self');</script>
      <?php
    }
  }
?>      
    <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2>Contact Us</h2>
                <ul>
                    <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i> Contact US</li>
                </ul>
            </div>
        </div>
    </div>
    
    
   
  <!--  ************************* Contact Us Starts Here ************************** -->


    <div style="margin-top:0px;" class="row no-margin">

        <iframe style="width:100%" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d249759.19784092825!2d79.10145254589841!3d12.009924873581818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1448883859107"  height="450" frameborder="0" style="border:0" allowfullscreen></iframe>


    </div>

    <div class="row contact-rooo no-margin">
        <div class="container">
            <div class="row">


                <div style="padding:20px" class="col-sm-7">
                    <h2 >Contact Form</h2> <br>
                     <form enctype="multipart/form-data" method="POST">
                    <div class="row cont-row">

                        <div  class="col-sm-3"><label>Subject </label><span>:</span></div>
                        <div class="col-sm-8"><input type="text" placeholder="Enter Name" name="subject" class="form-control input-sm"  ></div>
                    </div>
                    <div  class="row cont-row">
                        <div  class="col-sm-3"><label>Email Address </label><span>:</span></div>
                        <div class="col-sm-8"><input type="text" name="email" placeholder="Enter Email Address" class="form-control input-sm"  ></div>
                    </div>
                    <div  class="row cont-row">
                        <div  class="col-sm-3"><label>Mobile Number</label><span>:</span></div>
                        <div class="col-sm-8"><input type="text" name="phone" placeholder="Enter Mobile Number" class="form-control input-sm"  ></div>
                    </div>
                    <div  class="row cont-row">
                        <div  class="col-sm-3"><label>Enter Message</label><span>:</span></div>
                        <div class="col-sm-8">
                            <textarea rows="5" placeholder="Enter Your Message" name="msg" class="form-control input-sm"></textarea>
                        </div>
                    </div>
                    <div style="margin-top:10px;" class="row">
                        <div style="padding-top:10px;" class="col-sm-3"><label></label></div>
                        <div class="col-sm-8">
                            <button class="btn btn-primary btn-sm" name="submit">Send Message</button>
                        </div>
                    </div>
                </form>
                </div>
                <div class="col-sm-5">

                    <div style="margin:50px" class="serv">





                        <h2 style="margin-top:10px;">Address</h2>

                       Antonya Street, <br>
                        23/H-2, Building<br>
                        TA, AUS District<br>
                        Phone:+91 9159669599<br>
                        Email:support@smarteyeapps.com<br>
                        Website:www.smarteyeapps.com.com<br>







                    </div>


                </div>

            </div>
        </div>

    </div>
       
       <?php


include "footer.php";
   ?>