<?php
$con = mysqli_connect('localhost','root','','pizza');
if(isset($_POST["inputTop"]) && $_POST["inputTop"] !=NULL){
    $inputTopping = $_POST["inputTop"];
    $inputHarga = $_POST["inputHarga"];
    $result = mysqli_query($con,"INSERT INTO topping(namaTopping,hargaTopping) VALUES ('".$inputTopping."',$inputHarga) ");
}
//edit masih keneh gagal jon
if(isset($_POST["editTop"]) && $_POST["editTop"] && $_POST["menuNamaTopping"]!=NULL){
    $menuNamaTopping = $_POST["menuNamaTopping"];
    $editTopping = $_POST["editTop"];
    $editHarga = $_POST["editHarga"];
    $result = mysqli_query($con,"UPDATE edittopping(namaTopping,hargaTopping) SET namaTopping=editTop,hargaTopping=editHarga WHERE namaTopping=$menuNamaTopping ");
}
//hapus masih pake nama
if(isset($_POST["idTopping"]) != NULL){
    $idTopping = $_POST["idTopping"];
    $result = mysqli_query($con,"DELETE FROM topping WHERE idTopping = '".$idTopping."'");
}
//
// if buat method input kasir
if(isset($_POST["inputNamaK"]) && $_POST["inputNamaK"] ){
    $inputNamaK = $_POST["inputNamaK"];
    $inputUserK = $_POST["inputUsernK"];
    $inputPassK = $_POST["inputPassK"];
    $result = mysqli_query($con,"INSERT INTO pengguna(nama,password,role,username) VALUES ('".$inputNamaK."','".$inputPassK."',2,'".$inputUserK."') ");
}
//
//load topping
$sqltopping = ('select * from topping');
$topping = mysqli_query($con, $sqltopping) or die(mysqli_error($con));
$edittopping = mysqli_query($con, $sqltopping) or die(mysqli_error($con));
//
//load kasir
$sqlkasir = ('select * from pengguna where role="2"');
$kasir = mysqli_query($con, $sqlkasir) or die(mysqli_error($con));
//
//load laporanPenjualan 7 hari
$sqlLaporanA = ('SELECT hargaPesanan,hargaPesanan,idPesanan,idUser,tanggal from pesanan WHERE CURDATE() - tanggal <= "7"');
$laporanAQ = mysqli_query($con, $sqlLaporanA) or die(mysqli_error($con));
//
//Load kasir yang handle penjual terbayak
$sqlLaporanC = ('SELECT COUNT(idPesanan)as jumlahJual ,idUser FROM pesanan GROUP BY idUser');
$laporanCQ = mysqli_query($con,$sqlLaporanC) or die(mysqli_error($con));
//

//load penjualan
$sqlLaporan = ('SELECT * from pesanan ');
$laporanQ = mysqli_query($con, $sqlLaporan) or die(mysqli_error($con));
//


//load laporan rentang harga
$sqlLaporanBQ = NULL;

function laporanRentang(){
echo var_dump("MASUK FUNC");

$rentangAwal = $_POST["inputRentangAwal"];
$rentangAkhir = $_POST["inputRentangAkhir"];
$sqlLaporanB = ('SELECT hargaPesanan,hargaPesanan,idPesanan,idUser,tanggal from pesanan WHERE tanggal >= '.$rentangAwal." AND tanggal <= ".$rentangAkhir);
$sqlLaporanBQ = mysqli_query($con, $sqlLaporanB) or die(mysqli_error($con));

}
//

//
if(isset($_POST["inputRentangAwal"]) && $_POST["inputRentangAwal"]){
    $dataAwal = $_POST["inputRentangAwal"];
    $dateAkhir = $_POST["inputRentangAkhir"];
    //
    $rentangAwal = $_POST["inputRentangAwal"];
    $rentangAkhir = $_POST["inputRentangAkhir"];
   
    
    $sql= ('SELECT hargaPesanan,hargaPesanan,idPesanan,idUser,tanggal from pesanan WHERE tanggal >= "'.$rentangAwal.'"AND tanggal <= "'.$rentangAkhir.'"');

    
    $sqlLaporanB=mysqli_query($con, $sql); 

}
//
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="css/index.css">
    <script src="js/index.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-light" style="background-color: #c59579;">
        <a class="navbar-brand">
            <img class="pizzaImage" src="asset/pizzaretro.png" width="30" height="30" class="d-inline-block align-top"
                alt="">
            Pizzay</a>
        <a class="btn btn-dark my-2 my-sm-0" href="logout.php">Logout</a>
    </nav>

    <div class="container containerLuar" id="selectContainer">
        <div class="header" style="height: 100px;">
            <h3 class="judulAwal" style="top:-10%">Halaman Admin</h3>
        </div>

        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link nav-item active" role="tab" aria-controls="toppingUID" data-toggle="tab"
                    href="#toppingUID">Topping</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" role="tab" aria-controls="adminUID" data-toggle="tab" href="#adminUID">Pengguna</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" role="tab" aria-controls="kasirUID" data-toggle="tab" href="#kasirUID">Laporan</a>
            </li>
        </ul>
        <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
            <div class="tab-pane fade show active" id="toppingUID" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="row">
                    <div class="col-md text-left">
                        <h5 class="py-3">Topping</h5>
                    </div>
                    <div class="col-md text-right">
                        <input type="submit" value="Tambah Topping" class="btn btn-primary" data-toggle="modal"
                            data-target="#myModal13">
                        <input type="submit" value="" class="btn btn-primary" data-toggle="modal"
                            data-target="#myModal14" id="edit_topping" style="display: none;">
                    </div>
                </div>
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr class="text-center">
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($toppings = mysqli_fetch_array($topping)): ?>
                        <tr>
                            <td>
                                <?= $toppings['namaTopping'] ?>
                            </td>
                            <td>
                                <?= $toppings['hargaTopping'] ?>
                            </td>
                            <td class="text-center">
                                <button
                                    onclick="edit_topping(<?= $toppings['idTopping'] ?>, '<?= $toppings['namaTopping'] ?>', <?= $toppings['hargaTopping'] ?>)"
                                    class="btn btn-warning">UBAH</button>
                                <button
                                    onclick="delete_topping(<?= $toppings['idTopping'] ?>, '<?= $toppings['namaTopping'] ?>')"
                                    class="btn btn-danger">HAPUS</button>
                            </td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>

            <div class="tab-pane fade" id="adminUID" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div class="row">
                    <div class="col-md text-left">
                        <h5 class="py-3">Pengguna</h5>
                    </div>
                    <div class="col-md text-right">
                        <input type="submit" value="Tambah Kasir" class="btn btn-primary" data-toggle="modal"
                            data-target="#myModal5">
                        <input type="submit" value="" class="btn btn-primary" data-toggle="modal"
                            data-target="#myModal2" id="edit_pengguna" style="display: none">
                    </div>
                </div>
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr class="text-center">
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($kasirs = mysqli_fetch_array($kasir)): ?>
                        <tr>
                            <td>
                                <?= $kasirs['idUser'] ?>
                            </td>
                            <td>
                                <?= $kasirs['nama'] ?>
                            </td>
                            <td>
                                <?php 
                                    if($kasirs['role']==1){
                                        echo "ADMIN";
                                    }else{
                                        echo "KASIR";
                                    } 
                                    ?>
                            </td>
                            <td class="text-center">
                                <button
                                    onclick="edit_pengguna(<?= $kasirs['idUser'] ?>, '<?= $kasirs['nama'] ?>','<?= $kasirs['password'] ?>','<?= $kasirs['password'] ?>', <?= $kasirs['role'] ?>)"
                                    class="btn btn-warning">UBAH</button>
                                <button
                                    onclick="delete_pengguna(<?= $kasirs['idUser'] ?>, '<?= $kasirs['nama'] ?>', <?= $kasirs['role'] ?>)"
                                    class="btn btn-danger">HAPUS</button>

                            </td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>

            </div>
            <!-- laporanA -->
            <div class="tab-pane fade " id="kasirUID" role="tabpanel" aria-labelledby="nav-contact-tab">
                <h5 class="py-3">Data Laporan</h5>
                <!--  <input type="submit" value="Tambah Kasir" class="btn btn-secondary" data-toggle="modal" data-target="#myModal3"> -->
                <!-- <input type="submit" value="Transaksi Rentang 7 Hari" class="btn btn-danger"> -->
                <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo1">Penjualan
                    Rentang 7 Hari</button>


                <div id="demo1" class="collapse">
                    <table border="2">
                        <tr>
                            <th>
                                ID
                            </th>
                            <th>
                                Harga Pesanan
                            </th>
                            <th>
                                Tanggal
                            </th>
                            <th>
                                ID Kasir
                            </th>
                        </tr>
                        <?php while($laporanA = mysqli_fetch_array($laporanAQ)): ?>
                        <tr>
                            <td>
                                <?= $laporanA['idUser'] ?>
                            </td>
                            <td>
                                <?= $laporanA['hargaPesanan'] ?>
                            </td>
                            <td>
                                <?= $laporanA['tanggal'] ?>
                            </td>
                            <td>
                                <?= $laporanA['idUser'] ?>
                            </td>
                            <td>
                            </td>
                        </tr>
                        <?php endwhile; ?>
                    </table>
                </div>

                <!-- laporanC -->
                <h5 class="py-3"></h5>
                <!--  <input type="submit" value="Tambah Kasir" class="btn btn-secondary" data-toggle="modal" data-target="#myModal3"> -->
                <!-- <input type="submit" value="Transaksi Rentang 7 Hari" class="btn btn-danger"> -->
                <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo2">Penjualan
                    terbanyak yang di handle oleh kasir</button>


                <div id="demo2" class="collapse">
                    <table border="2">
                        <tr>
                            <th>
                                Jumlah Penjualan
                            </th>
                            <th>
                                ID Kasir
                            </th>
                        </tr>
                        <?php while($laporanC = mysqli_fetch_array($laporanCQ)): ?>
                        <tr>
                            <td>
                                <?= $laporanC['jumlahJual'] ?>
                            </td>

                            <td>
                                <?= $laporanC['idUser'] ?>
                            </td>
                            <td>
                            </td>
                        </tr>
                        <?php endwhile; ?>
                    </table>
                </div>
                <!---->
                <!-- laporanB -->
                <h5 class="py-3"></h5>
                <!--  <input type="submit" value="Tambah Kasir" class="btn btn-secondary" data-toggle="modal" data-target="#myModal3"> -->
                <!-- <input type="submit" value="Transaksi Rentang 7 Hari" class="btn btn-danger"> -->
                <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo3">Penjualan
                    Rentang Waktu</button>

                <div id="demo3" class="collapse">

                    <form action="admin.php" method="post">
                        <input type="date" name="inputRentangAwal" data-date-format="YYYY MMMM DD">
                        <input type="date" name="inputRentangAkhir" data-date-format="YYYY MMMM DD">
                        <button type="submit">Submit</button>
                    </form>

                    <br>


                    <table border="2">
                        <tr>
                            <th>
                                ID
                            </th>
                            <th>
                                Harga Pesanan
                            </th>
                            <th>
                                Tanggal
                            </th>
                            <th>
                                ID Kasir
                            </th>
                        </tr>

                        <?php if(isset($sqlLaporanB)){
                                
                                 while($laporanB = mysqli_fetch_array($sqlLaporanB)): ?>
                        <tr>
                            <td>
                                <?= $laporanB['idPesanan'] ?>
                            </td>
                            <td>
                                <?= $laporanB['hargaPesanan'] ?>
                            </td>
                            <td>
                                <?= $laporanB['tanggal'] ?>
                            </td>
                            <td>
                                <?= $laporanB['idUser'] ?>
                            </td>
                            <td>
                            </td>
                        </tr>
                        <?php endwhile;  }?>
                    </table>
                </div>
            </div>
            <!---->



            <div class="modal" id="myModal2">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Ubah Pengguna</h4><br>
                            <h4>1:Admin 2:Kasir</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <form action="./kasir/edit_pengguna.php" method="post">
                            <div class="modal-body">
                                <span style="display: none;">ID </span> <input type="number" id="user_id" name="id"
                                    style="display: none;">
                                <span>Nama Pengguna</span> <input type="text" id="user_name" name="name"><br>
                                <span>Username</span> <input type="text" id="user_username" name="username"><br>
                                <span>Password</span> <input type="text" id="user_password" name="password">
                                <span style="display: none">Jabatan</span> <input type="number" id="user_role"
                                    name="role" style="display:none">
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-danger">Submit</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--  -->
            <div class="modal" id="myModal5">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Tambah Kasir</h4><br>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <form action="./kasir/add_kasir.php" method="post">
                            <div class="modal-body">
                                <span style="display: none;">ID </span> <input type="number" id="user_id" name="id"
                                    style="display: none;">
                                <span>Nama Pengguna</span> <input type="text" id="name" name="name"><br>
                                <span>Username</span> <input type="text" id="username" name="username"><br>
                                <span>Password</span> <input type="text" id="password" name="password"><br>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-danger" name="reg">Submit</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="modal" id="myModal13">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Tambah Topping</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <form action="./topping/add_topping.php" method="post">
                            <div class="modal-body">
                                <span>Nama </span> <input type="text" id="name" name="name">
                                <span>Harga </span> <input type="number" id="price" name="price">
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-danger">Submit</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="modal" id="myModal14">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Ubah Topping</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <form action="./topping/edit_topping.php" method="post">
                            <div class="modal-body">
                                <span style="display: none;">ID </span> <input type="number" id="topping_id" name="id"
                                    style="display: none;">
                                <span>Nama </span> <input type="text" id="topping_name" name="name">
                                <span>Harga </span> <input type="number" id="topping_price" name="price">
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-danger">Submit</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php
        ?>
        <script type="text/javascript">
        function edit_topping(topping_id, topping_name, topping_price) {
            $('#topping_id').val(topping_id);
            $('#topping_name').val(topping_name);
            $('#topping_price').val(topping_price);
            $('#edit_topping').click();
        }

        function delete_topping(topping_id, topping_name) {
            conf = confirm("Apakah Anda akan menghapus topping " + topping_name + " ?");
            if (conf == true) {
                $.post("./topping/delete_topping.php", {
                        idTopping: topping_id
                    },
                    function(data, status) {
                        alert("Topping " + topping_name + " telah berhasil dihapus.");
                        location.reload(true);
                    });
            }
        }

        function edit_pengguna(user_id, user_name, user_username, user_password, user_role) {
            $('#user_id').val(user_id);
            $('#user_name').val(user_name);
            $('#user_username').val(user_username);
            $('#user_password').val(user_password);
            $('#user_role').val(user_role);
            $('#edit_pengguna').click();

        }

        function delete_pengguna(user_id, user_name) {
            conf = confirm("Apakah Anda akan menghapus user " + user_name + " ?");
            if (conf == true) {
                $.post("./kasir/delete_pengguna.php", {
                        idUser: user_id
                    },
                    function(data, status) {
                        alert("User " + user_name + " telah berhasil dihapus.");
                        location.reload(true);
                    });
            }
        }
        </script>
</body>

</html>