<?php
include 'header.php';
include 'nav.php';

?>
<?php
  include 'dbcon.php';

    if (isset($_POST['submit'])) {
    
     
       $title = $_POST['title'];
       
       $des = $_POST['des'];
       
     

       $target_path="pic/";
      extract($_POST);
       $target_path = $target_path.basename($_FILES['image']['name']);
      if (move_uploaded_file($_FILES['image']['tmp_name'], $target_path)) { 

      
     $query = "INSERT INTO `vision`(`image`,`title`,`des`) VALUES ('$target_path','$title','$des')";
      
    }
      $result = mysqli_query($con,$query);
      
     if ($result==true) {
      $_SESSION['success_msg'] = "Your Record is updated successfully";
      ?>
    <script>window.open('vision_dis.php','_self');</script>
      <?php
    }
    else
    {
      $_SESSION['error_msg'] = "Your Record is not updated there is some error";
      ?>
    <script>window.open('vision_dis.php','_self');</script>
      <?php
    }
  }
?>
<div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Vision Views</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Vision
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-6">
      <form role="form" method="POST" action="#" enctype="multipart/form-data">
      <div class="form-group">
      <label>Imge</label>
    <input type="file" class="form-control" name="image" placeholder="Enter Your Pic" required><BR>

      
    
<label>Title</label>
      <input class="form-control" name="title" placeholder="Title" required><BR>

     


     
      <label>Des</label>
      

      <textarea class="form-control" name="des" placeholder="Details">
          
      </textarea>





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