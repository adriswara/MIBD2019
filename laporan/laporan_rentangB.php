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
$con = mysqli_connect('localhost','root','','pizza');   
//load laporan rentang harga
$rentangAwal = $_POST["inputRentangAwal"];
$rentangAkhir = $_POST["inputRentangAkhir"];
echo var_dump($rentangAwal);
echo var_dump($rentangAkhir);

$sql= ('SELECT hargaPesanan,hargaPesanan,idPesanan,idUser,tanggal from pesanan WHERE tanggal >= "'.$rentangAwal.'"AND tanggal <= "'.$rentangAkhir.'"');
echo var_dump($sql);

$sqlLaporanB=mysqli_query($con, $sql); 

header('Location: ../admin.php?sqlLaporanB='.$sqlLaporanB );

//

?>
