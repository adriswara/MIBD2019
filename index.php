
<?php
$conn = mysqli_connect('localhost','root','','pizza');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/index.css">
  <script src="js/index.js"></script>
  <!--<?php //include "mysqlDB.php"; ?>-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <title>Document</title>
</head>
<body>


  <nav class="navbar navbar-light" style="background-color: #c59579;">
    <a class="navbar-brand" href="index.php">
      <img class="pizzaImage" src="asset/pizzaretro.png" width="30" height="30" class="d-inline-block align-top" alt="">
    Pizzay</a>
  </nav>

  <div class="container containerLuar align-middle " id="welcomeContainer">

   <center><h1 class="judulAwal" style="top:-10%" >Selamat datang di Pizzay!!!</h1></center> 
   <center><h3 class="judulAwal">Silahkan Login Dibawah ini</h3></center>

   <img src="asset/pizza.gif" width="300" height="300" alt=""> 



   <!-- Button  -->
   <div id="divButton">

     <div class="formLogin">
      <div class="row">
       <form action="" method="post">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-6">
              <span class="username">Username:</span> 
            </div>
            <div class="col-md-6">
              <input type="text" class="username" name="username" value="bima">
            </div>
            <div class="col-md-6">
              <span class="pass">Password:</span>
            </div>
            <div class="col-md-6">
              <input type="password" class="pass" value="admin123" name="password">
            </div>
          </div>
        </div>
        <br>
        <div class="col-md-6 text-center">
          <button type="submit" class="btn btn-primary">LOGIN</button>
        </div>
      </form>
    </div>  
    <!-- <button action="login()"  >TEST</button> -->
    <!-- <a href="sign_in.php" class="btn btn-primary btn-lg" id="loginAdmin" role="button">Login</a> -->
    <!-- <a href="kasir.php" class="btn btn-primary btn-lg" id="loginKasir" role="button">Login Kasir</a> -->
  </div> 

</div>

<?php

//if untuk pengecekan masuk jika not null menghilangi eror php

if(isset($_POST["username"])&&$_POST["username"]!=NULL){

$usernameField = $_POST["username"];   
$passwordField = $_POST["password"];


$result = mysqli_query($conn,"SELECT * FROM pengguna WHERE username='".$usernameField."' AND password='".$passwordField."'");
$rowcount=mysqli_num_rows($result);
if($rowcount == 1){
  while($row = $result->fetch_assoc()) {
    if($row["role"]=="1"){
      header('Location: ./admin.php');
    }else{
      header('Location: ./kasir.php');
    }
  }
}else{
  echo "USERNAME AND PASSWORD NOT MATCH!";
  header('Location: ');
}
function login(){

  if($row["nama"]==$usernameField && $row["password"]==$passwordField){
    if($row["role"]==1){
      echo "admin.php";
    }
    else if ($row["role"]==0){
      echo "kasir.php";
    }
  }

}
}



?>

</body>
</html>

