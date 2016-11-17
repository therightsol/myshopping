<html>
<head>
	<title>ck editior create new style bahi jan </title>
	<script src="//cdn.ckeditor.com/4.5.11/full/ckeditor.js"></script>
</head>
<?php 	
	if(!empty($_POST['button'])){
		$result =$_POST['textarea'];
// $pass =$_POST['pass'];


			// echo $result;
}else{
	echo 'not succesfuly bahi jan ';
} ?>

	

<body>

<form action="ckeditior.php"  method="post" id="CMStutform" name="CMStutform">
<table width="750" border="0" align="center">
<tbody>
	<tr>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td><?php echo $result; ?></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td><textarea name="textarea" id="textarea"></textarea></td>
	</tr>
	<tr>
		<td><input type="submit" name="button" id="button" value="upload" ></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
	</tr>
</tbody>
</table>
</form>

		<script>
            CKEDITOR.replace( 'textarea' );
        </script>
</body>
</html>