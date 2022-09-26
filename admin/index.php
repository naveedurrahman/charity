<?php

session_start();
// die($_SESSION['username']);
if ($_SESSION['user_name'] == '') {
	header("Location:login.php");exit();
}else{

include  "header.php";
include "nav.php";
include "body.php";
include "footer.php";
}

?>