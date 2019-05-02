
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">
    <script src="js/index.js"></script>
    <?php include "mysqlDB.php"; ?>
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

  <div class="container" id="welcomeContainer">
   
   <center><h1 class="judulAwal" style="top:-10%" >Selamat datang di Pizzay!!!</h1></center> 
   <center><h3 class="judulAwal">Silahkan Login Dibawah ini</h3></center>

   <img src="asset/pizza.gif" width="300" height="300" alt=""> 



    <!-- Button  -->
   <div id="divButton">

   <div class="formLogin">
   <center> <span class="username">Username:</span> <input type="text" class="username" value=""></center>
    <center><span class="pass">Password:</span><input type="password" class="pass" value=""></center>
</div>  

      <a href="admin.php" class="btn btn-primary btn-lg" id="loginAdmin" role="button">Login Admin</a>
      <a href="kasir.php" class="btn btn-primary btn-lg" id="loginKasir" role="button">Login Kasir</a>
    </div> 
   
  </div>

  <?php
$this->db->executeSelectQuery("SELECT nama,password FROM pengguna ");

?>
 
</body>
</html>

