<?php
	$id_topping = $_POST['idTopping'];
	$con = mysqli_connect('localhost','root','','pizza');
	mysqli_query($con,"DELETE FROM topping WHERE idTopping = '".$id_topping."'");
?>