<?php
include 'header.php';
include 'nav.php';

?>
<?php
  include 'dbcon.php';

    if (isset($_POST['submit'])) {
    
       $user_name = $_POST['user_name'];
       $password = $_POST['password'];

      
     $query = "INSERT INTO `user`(`user_name`,`password`) VALUES ('$user_name','$password')";
      
    
      $result = mysqli_query($con,$query);
      
     if ($result==true) {
      $_SESSION['success_msg'] = "Your Record is updated successfully";
      ?>
    <script>window.open('user_dis.php','_self');</script>
      <?php
    }
    else
    {
      $_SESSION['error_msg'] = "Your Record is not updated there is some error";
      ?>
    <script>window.open('user_dis.php','_self');</script>
      <?php
    }
  }
?>
<div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Forms</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Basic Form Elements
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-6">
      <form role="form" method="POST" action="#" enctype="multipart/form-data">
      <div class="form-group">
      <label>User Name</label>
      <input type="text" class="form-control" name="user_name" placeholder="User name.." required><BR>

<label>Password</label>
      <input type="password"class="form-control" name="password" placeholder="Your Password.." required><BR>

     

      



    </div>
                                                    
      
                                               
                                                <div>
                    <button type="submit" class="btn btn-Primery" name="submit">Submit </button>
                        <button type="reset" class="btn btn-default">Reset </button></div>
                                            </form>
                                        </div>

                                     
                                        <!-- /.col-lg-6 (nested) -->


                                        <?php 
                                        include 'footer.php';

                                        ?>