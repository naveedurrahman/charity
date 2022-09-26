
<?php

include 'dbcon.php';


if(isset($_POST['Submit'])){
extract($_POST);
$password1=md5($password);

  $insert="select * from  user where user_name='$user_name' and password='$password'";
//exit;

$done=mysqli_query($con, $insert);
$rowcount=mysqli_num_rows($done);
if($rowcount ==1){

//echo "successfully login";
$display=mysqli_fetch_array($done);
session_start();
$_SESSION["user_name"] = $display['user_name'];
// print_r($_SESSION['username']);die();
   // header("Location:index.php");
?>
<script>window.location="index.php";</script>
<?php
}else{

echo "Username or password is incorrect Pls Try Again";

}


}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Charity</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="css/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/startmin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="control-group normal_text"> 
                    <h3><img src="../assets/images/logo.jpg" alt="Logo" /></h3>
                </div>
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Please Sign In</h3>
                        </div>
                        <div class="panel-body">

                            <form role="form" method="POST" action="#">

                                <fieldset>
                                    <div class="form-group">
                    <input type="username" class="form-control" placeholder="Username" name="user_name" type="username" autofocus>
                                    </div>
                                    <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" name="password" type="passwordd" value="">
                                    </div>
                                   
                                    <!-- Change this to a button or input when using this as a form -->
                     <input type="Submit" name="Submit" value="Login" class="btn btn-lg btn-success btn-block">
                     
                                   
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="js/startmin.js"></script>

    </body>
</html>
