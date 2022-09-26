 <?php
include "head.php";
include "navbar.php";

 ?>
 <!--  ************************* Page Title Starts Here ************************** -->

 <?php
  include 'dbcon.php';

    if (isset($_POST['submit'])) {
    
     
       $name = $_POST['name'];
       $fname = $_POST['fname'];
     
      $email = $_POST['email'];
       $address = $_POST['address'];
        $country = $_POST['country']; 
        $phone = $_POST['phone']; 
     

       $target_path="pic/";
      extract($_POST);
       $target_path = $target_path.basename($_FILES['image']['name']);
      if (move_uploaded_file($_FILES['image']['tmp_name'], $target_path)) { 

      
     $query = "INSERT INTO `apply`(`image`,`name`,`fname`,`email`,`address`,`country`,`phone`) VALUES ('$target_path','$name','$fname','$email','$address','$country','$phone')";
      
    }
      $result = mysqli_query($con,$query);
      
     if ($result==true) {
      $_SESSION['success_msg'] = "Your Record is updated successfully";
      ?>
    <script>window.open('apply.php','_self');</script>
      <?php
    }
    else
    {
      $_SESSION['error_msg'] = "Your Record is not updated there is some error";
      ?>
    <script>window.open('apply.php','_self');</script>
      <?php
    }
  }
?>
        
    <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2>Apply For Donation</h2>
                <ul>
                    <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i> Apply For Donation</li>
                </ul>
            </div>
        </div>
    </div>
    
    
   
  <!--  ************************* Contact Us Starts Here ************************** -->


    <!-- <div style="margin-top:0px;" class="row no-margin">

        <iframe style="width:100%" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d249759.19784092825!2d79.10145254589841!3d12.009924873581818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1448883859107"  height="450" frameborder="0" style="border:0" allowfullscreen></iframe>


    </div> -->
<br>
    <div class="row contact-rooo no-margin">
        <div class="container">
            <div class="row" >

                <div class="col-sm-6">
                    <form enctype="multipart/form-data" method="POST">

                    <div class="row cont-row">
                        <div  class="col-sm-3"><label>Enter Name </label><span>:</span></div>
                        <div class="col-sm-8"><input type="text" placeholder="Enter Name" name="name" class="form-control input-sm"  ></div>
                    </div>
                    <div  class="row cont-row">
                        <div  class="col-sm-3"><label>Email Address </label><span>:</span></div>
                        <div class="col-sm-8"><input type="text" name="email" placeholder="Enter Email Address" class="form-control input-sm"  ></div>
                    </div>
                    <div  class="row cont-row">
                        <div  class="col-sm-3"><label>Mobile Number</label><span>:</span></div>
                        <div class="col-sm-8"><input type="text" name="phone" placeholder="Enter Mobile Number" class="form-control input-sm"  ></div>
                    </div>
                     <div class="row cont-row">
                        <div  class="col-sm-3"><label>Address </label></div>
                        <div class="col-sm-8"><input type="text" placeholder="Enter Address" name="address" class="form-control input-sm"  ></div>
                    </div>
                    <!-- <div  class="row cont-row">
                        <div  class="col-sm-3"><label>Enter Message</label><span>:</span></div>
                        <div class="col-sm-8">
                            <textarea rows="5" placeholder="Enter Your Message" class="form-control input-sm"></textarea>
                        </div>
                    </div> -->
                    <br><br><br>
                    <div class="row" style="margin-left: 400px;">
                        <!-- <div style="padding-top:10px;" class="col-sm-3"><label></label></div> -->
                        <div class="col-sm-12">
                            <button class="btn btn-primary btn-sm" name="submit">Send Message</button>
                        </div>
                    </div>
                </div>
                 <div class="col-sm-6">

                   <div class="row cont-row">
                        <div  class="col-sm-3"><label>Father Name </label><span>:</span></div>
                        <div class="col-sm-8"><input type="text" placeholder="Enter Father Name" name="fname" class="form-control input-sm"  ></div>
                    </div>
                    <div  class="row cont-row">
                        <div  class="col-sm-3"><label>Country </label><span>:</span></div>
                        <div class="col-sm-8"><input type="text" name="country" placeholder="Enter Country" class="form-control input-sm"  ></div>
                    </div>
                    <div class="row cont-row">
                        <div  class="col-sm-3"><label>Death Certificate  </label></div>
                        <div class="col-sm-8"><input type="file" placeholder="Enter Name" name="image" class="form-control input-sm"  ></div>
                    </div>
 </form>
                   
                   
                    
                </div> 

<!-- <input type="submit" name=""> -->
            </div>
        </div>

    </div>
       <br><br>
       <?php


include "footer.php";
   ?>