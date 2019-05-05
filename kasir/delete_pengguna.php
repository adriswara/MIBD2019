<?php
	$id_user = $_POST['idUser'];
	$con = mysqli_connect('localhost','root','','pizza');
	mysqli_query($con,"DELETE FROM pengguna WHERE idUser = '".$id_user."'");
?>