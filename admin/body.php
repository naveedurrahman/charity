<div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Dashboard</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-user fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">
                                                <?php
include 'dbcon.php';
                                                 $tot="select count(*) as id from become";
                                        $tot1=mysqli_query($con,$tot);
                                        $tot2=mysqli_fetch_array($tot1);
                                        echo $tot2['id'];
                                ?>
                                    
                                </div>
                                            <div>Becom a Volunteer!</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer">
                                        <a href="becomedeteil.php"><span class="pull-left">View Details</span></a>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-green">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-search fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">
                                                     <?php
include 'dbcon.php';
                                                 $tot="select count(*) as id from quick";
                                        $tot1=mysqli_query($con,$tot);
                                        $tot2=mysqli_fetch_array($tot1);
                                        echo $tot2['id'];
                                     ?>

                                            </div>
                                            <div>Quick Fundrais!</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer">
                                      <a href="quickdetail.php">  <span class="pull-left">View Details</span></a>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-yellow">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                        <i class="fa-solid fa-hand-holding-dollar fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">
                                                     <?php
include 'dbcon.php';
                                                 $tot="select count(*) as id from give";
                                        $tot1=mysqli_query($con,$tot);
                                        $tot2=mysqli_fetch_array($tot1);
                                        echo $tot2['id'];
                                     ?>
                                            </div>
                                            <div>Give Donation</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer">
                                       <a href="givedetail.php"> <span class="pull-left">View Details</span></a>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-red">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                           <i class="fa fa-handshake-angle fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">
                                                 <?php
include 'dbcon.php';
                                                 $tot="select count(*) as id from help";
                                        $tot1=mysqli_query($con,$tot);
                                        $tot2=mysqli_fetch_array($tot1);
                                        echo $tot2['id'];
                                     ?>

                                            </div>
                                            <div>Help Someone!</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer">
                                        <a href="helpdetail.php"><span class="pull-left">View Details</span></a>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                   
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>