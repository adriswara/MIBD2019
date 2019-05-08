<?php
	session_start();
	$conn = mysqli_connect('localhost','root','','pizza');
	if (isset($_SESSION['session_key'])) {
	  $session_key = $_SESSION["session_key"];
	  $query = "SELECT * FROM pengguna WHERE idUser=$session_key";
	  $result= mysqli_query($conn, $query) or die(mysqli_error($conn));
	  if(mysqli_num_rows($result) == 1){
	    $res_arr = mysqli_fetch_array($result);
	    $role = $res_arr["role"];
	    if($role!="1") {
	      header('Location: ./kasir.php');
	    }
	  }
	}
	$id_topping = $_POST['idTopping'];
	$con = mysqli_connect('localhost','root','','pizza');
	mysqli_query($con,"DELETE FROM topping WHERE idTopping = '".$id_topping."'");
?>