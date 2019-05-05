<?php
	$name = $_POST['name'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$con = mysqli_connect('localhost','root','','pizza');
	mysqli_query($con,"INSERT INTO pengguna(nama,password,role,username) VALUES ('$name','$password', 2, '$username') ");
	header('Location: ../admin.php');
?>