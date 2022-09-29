<?php
//include  "header.php";
//include "nav.php";
error_reporting(1);

$con=mysql_connect("localhost","root","rootroot","izazcharity");

mysql_select_db("izazcharity",$con);

extract($_POST);

$target_dir = "img/";
//move_uploaded_file(test_upload,$target_dir);

$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

if($upd)
{
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

if($imageFileType != "mp4" && $imageFileType != "avi" && $imageFileType != "mov" && $imageFileType != "3gp" && $imageFileType != "mpeg")
{
    echo "File Format Not Suppoted";
} 

else
{

$video_path=$_FILES['fileToUpload']['name'];

mysql_query("insert into intro_video(video_name) values('$video_path')");

move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file);

echo "uploaded ";

}

}

//display all uploaded video

if($disp)

{

$query=mysql_query("select * from intro_video where flag=1");

	while($all_video=mysql_fetch_array($query))

	{
?>
	 
	 <video width="300" height="200" controls autoplay>
	<source src="img/<?php echo $all_video['video_name']; ?>" type="video/mp4">
	</video> 
	
	<?php } } ?>









<center>

<form method="post" enctype="multipart/form-data">

<table border="10px" style="padding:10px">

<tr>

<Td>Upload  Video</td></tr>

<Tr><td><input type="file" name="fileToUpload"/></td></tr>

<tr><td>

<input type="submit" value="Uplaod Video" name="upd"/>
<br>

<input type="submit" value="Display Video" name="disp"/>

</td></tr>

</table>

</form>
</center>
<?php

//include 'footer.php';

?>