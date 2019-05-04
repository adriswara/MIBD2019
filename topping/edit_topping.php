<?php
	$id = $_POST['id'];
	$name = $_POST['name'];
	$price = $_POST['price'];
	$con = mysqli_connect('localhost','root','','pizza');
	mysqli_query($con,"UPDATE topping SET namaTopping='$name', hargaTopping=$price WHERE idTopping=$id");
	header('Location: ../admin.php');
?>