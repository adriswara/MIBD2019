<?php
$con = mysqli_connect('localhost','root','','pizza');
$sqltopping = ('select * from topping');
$topping= mysqli_query($con, $sqltopping) or die(mysqli_error($con));

$hargapizza = ('select hargaPizza FROM pizza');
$hargatopping = ('select namaTopping, SUM(hargatopping) from pizza_pesanan_topping join topping on pizza_pesanan_topping.idTopping = topping.idTopping group by namaTopping')
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
        <a class="navbar-brand" >
            <img class="pizzaImage" src="asset/pizzaretro.png" width="30" height="30" class="d-inline-block align-top" alt="">
        Pizzay</a>
        <a class="btn btn-dark my-2 my-sm-0" href="index.php" >Logout</a>
    </nav>

    <div class="container" id="selectContainer">

        <center>
            <h1 class="judulAwal" style="top:-10%">Laman Kasir</h1>
        </center>
        <center>
            <h3 class="judulAwal">Menu Pesanan Topping</h3>
        </center>



        <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
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
                                <button onclick="pilih_topping(<?= $toppings['idTopping'] ?>, '<?= $toppings['namaTopping'] ?>', <?= $toppings['hargaTopping'] ?>)" class="btn btn-warning">PILIH</button>
                                <button onclick="tidak_pilih_topping(<?= $toppings['idTopping'] ?>, '<?= $toppings['namaTopping'] ?>')" class="btn btn-danger">HAPUS</button>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>

        <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr class="text-center">
                        <th>Topping Terpilih</th>
                        <th>Harga</th>
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
                                <button onclick="pilih_topping(<?= $toppings['idTopping'] ?>, '<?= $toppings['namaTopping'] ?>', <?= $toppings['hargaTopping'] ?>)" class="btn btn-warning">PILIH</button>
                                <button onclick="tidak_pilih_topping(<?= $toppings['idTopping'] ?>, '<?= $toppings['namaTopping'] ?>')" class="btn btn-danger">BATAL</button>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                    <th>hehe</th>
                </tbody>
            </table>
        </div>
        
    </div>
    
</body>

<script type="text/javascript">
    function pilih_topping(topping_id, topping_name, topping_price) {
        $('#topping_id').val(topping_id);
        $('#topping_name').val(topping_name);
        $('#topping_price').val(topping_price);
        $('#edit_topping').click();
    }

</script>



</html>