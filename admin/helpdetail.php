<?php
 
 include "header.php";
 include "nav.php";
 include 'dbcon.php';
?>

 <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Help Record Views</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                        <div class="container-fluid">
    <?php
    if (isset($_SESSION['success_msg'])) {
      ?>
      <div class="alert alert-info">
        <strong>Information !..</strong>
        <?php
        echo $_SESSION['success_msg'];
        unset($_SESSION['success_msg']);
        ?>
      </div>
      <?php
    }
    ?>
    <?php 
    if (isset($_SESSION['error_msg'])) {
      ?>
      <div class="alert alert-danger">
        <strong>Error !..</strong>
        <?php
        echo $_SESSION['error_msg'];
        unset($_SESSION['error_msg']);
        ?>
      </div>
      <?php
    }
    ?>
  </div>
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
     <!-- <button type="button" class="btn btn-danger"><a href="sponser_form.php" style="color: white; text-decoration: none;">Add New Record</a>
     </button> -->
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>S.#</th>
                                                    <th>Name</th>
                                                  
                                                    <TH>Phone</TH>
                                                    <th>Family Member </th>
                                                    <th>address</th>
                                                    <th>city</th>
                                                   

                                                 
                                                    <th>Deleted</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="odd gradeX">
                                                 <?php
    $selecte = "SELECT * FROM `help`";
                $result1 = mysqli_query($con, $selecte);
                 
                while ($row = mysqli_fetch_assoc($result1)) {
                    # code...
              
                
                ?>
                <tr>
                  <td><?php echo $row['id'];?></td>
                
                  <td><?php echo $row['name'];?></td>
                  
           <td><?php echo $row['phone'];?></td>
                  <td><?php echo $row['family'];?></td>
                  <td><?php echo $row['address'];?></td>
             <td><?php echo $row['city'];?></td>
                   
                <!--<td><img src="<?php #echo $row['product_image'];?>" style="max-width: 100px;" alt=""></td>-->
                 <!--<td><?php #echo $row['category_name'];?></td>-->

                 <!--<td> <a href=".php?sid=<?php //echo $data[''];?>">
                      <img src="pic/update.jpg" style="max-width: 50px;" alt="">
                    </a>
                  </td>-->
                  <td>
       <a href="help_deleted.php?did=<?php echo $row['id'];?>" onclick="return confirm('Do you really want to delete this ?')">
                      <img src="pic/delete.jpg" style="max-width: 50px;" alt="">
                    </a>
                  </td>
                </tr>
                                               
                                                <?php };?>
                                            </tbody>
                                        </table>
                                    </div>
                                    
                   

                        <?php
include "footer.php";
                        ?>