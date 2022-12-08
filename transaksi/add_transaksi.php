<?php
	session_start();
	$user_id = "";
	$conn = mysqli_connect('localhost','root','','pizza');
	if (isset($_SESSION['session_key'])) {
	  $session_key = $_SESSION["session_key"];
	  $query = "SELECT * FROM pengguna WHERE idUser=$session_key";
	  $result= mysqli_query($conn, $query) or die(mysqli_error($conn));
	  if(mysqli_num_rows($result) == 1){
	    $res_arr = mysqli_fetch_array($result);
	    $role = $res_arr["role"];
	    if($role!="2") {
	      header('Location: ./admin.php');
	    }else{
	    	$user_id = $res_arr["idUser"];
	    }
	  }
	}
	$grand_total = $_POST["grand-total"];
	$topping = $_POST["topping"];
	for ($i=0; $i < count($topping); $i++) { 
		for ($j=0; $j < count($topping[$i]); $j++) { 
			echo $topping[$i][$j]." - ";
		}
		echo "\n";
	}
	
	$con = mysqli_connect('localhost','root','','pizza');
	mysqli_query($con,"INSERT INTO pesanan(hargaPesanan, idUser) VALUES ('$grand_total', $user_id) ");
	header('Location: ../kasir.php');
?>