<?php 

if(isset($_FILES['uploadfilefeild'])){

	$uploadname = $_FILES['uploadfilefeild'][
	'name'];
	$uploadname = mt_rand(100000,999999).$uploadname;
	$uploadtmp = $_FILES['uploadfilefeild']['tmp_name'];
	$uploadtype = $_FILES['uploadfilefeild']['type'];


	 $uploadname = preg_replace('#[^a-z0-9.]#i','',$uploadname);
	 if (!$uploadtmp) {
	 	die("no file selected please upload again");
	 }else{
	 	move_uploaded_file($uploadtmp, "upload/$uploadname");
	 }  
}

 ?>

<html>
<head>
	<title>file upload </title>
	<style type="text/css">
	body{
		margin:0;
		padding: 0;
		background-color: grey;


	}
	.fileuploadholder{
		padding:10px;
		background-color: white;
		width: 400px;
		height: 200px;
		border: 1px solid black;
		margin:60px auto 0px auto;
	}

	</style>
</head>
<body>
<div class="fileuploadholder">

<form id="fileuploadform" action="fileupload.php" method="post" enctype="multipart/form-data">
<input type="file" id="uploadfilefeild" name="uploadfilefeild">
<input type="submit" value="Upload" id="uploadbutton" name="uploadbutton">

</form>


</div>
</body>
</html>