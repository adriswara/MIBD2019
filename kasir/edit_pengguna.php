<?php
	$id = $_POST['id'];
	$name = $_POST['name'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$role = $_POST['role'];
	$con = mysqli_connect('localhost','root','','pizza');
	mysqli_query($con,"UPDATE pengguna SET nama='$name', username='$username', password = '$password'WHERE idUser=$id");
	header('Location: ../admin.php');
?>