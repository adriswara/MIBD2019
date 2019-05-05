<?php
	$id = $_POST['id'];
	$name = $_POST['name'];
	$role = $_POST['role'];
	$con = mysqli_connect('localhost','root','','pizza');
	mysqli_query($con,"UPDATE pengguna SET namaPengguna='$name', role=$role WHERE idPengguna=$id");
	header('Location: ../admin.php');
?>