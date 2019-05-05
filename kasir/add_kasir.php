<?php
	$name = $_POST['name'];
	$username = $POST['username'];
	$password = $POST['password'];
	$role = $_POST['role'];
	$con = mysqli_connect('localhost','root','','pizza');
	mysqli_query($con,"INSERT INTO pengguna(nama,username,password,role) VALUES ('$name','$username', '$password', 2) ");
	header('Location: ../admin.php');
?>