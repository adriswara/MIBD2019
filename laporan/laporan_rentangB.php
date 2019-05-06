<?php
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
