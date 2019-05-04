<?php
	$name = $_POST['name'];
	$price = $_POST['price'];
	$con = mysqli_connect('localhost','root','','pizza');
	mysqli_query($con,"INSERT INTO topping(namaTopping,hargaTopping) VALUES ('$name',$price) ");
	header('Location: ../admin.php');
?>