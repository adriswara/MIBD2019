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
    if($role!="2") {
      header('Location: ./admin.php');
    }
  }
}
$con = mysqli_connect('localhost','root','','pizza');
$sqltopping = ('select * from topping');
$topping= mysqli_query($con, $sqltopping) or die(mysqli_error($con));

$hargapizza = ('select hargaPizza FROM pizza');
$hargatopping = ('select namaTopping, SUM(hargatopping) from pizza_pesanan_topping join topping on 
    pizza_pesanan_topping.idTopping = topping.idTopping group by namaTopping');

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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
        
        <title>Document</title>
    </head>

    <body>

        <nav class="navbar navbar-light" style="background-color: #c59579;">
            <a class="navbar-brand" >
                <img class="pizzaImage" src="asset/pizzaretro.png" width="30" height="30" class="d-inline-block align-top" alt="">
            Pizzay</a>
            <a class="btn btn-dark my-2 my-sm-0" href="logout.php" >Logout</a>
        </nav>

        <div class="container form-group" id="selectContainer">
            <br>
            <div class="row">
                <div class="col-md-6">
                    <h3>PEMESANAN</h3>
                </div>
                <div class="col-md-6 text-right">
                    <button class="btn btn-success" onclick="addNewRow()">TAMBAH PIZZA</button>
                </div>
            </div>
            <br>
            <form method="POST" action="./transaksi/add_transaksi.php">
                <input type="number" name="grand-total" id="grand-total" value="0" style="display: none;">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <th>Pizza</th>
                        <th>Topping</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td width="15%">
                                Pizza 1
                            </td>
                            <td width="60%">
                                <select class="selectpicker form-control" data-live-search="true" multiple onchange="updateHarga(this)" id="1" name="topping[1][]">
                                    <?php while($toppings = mysqli_fetch_array($topping)): ?>
                                        <option value="<?= $toppings['idTopping'] ?>" data-subtext="<?= $toppings['hargaTopping'] ?>"><?= $toppings['namaTopping'] ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </td>
                            <td width="15%">
                                0
                            </td>
                            <td width="10%">
                                <button class="btn btn-danger form-control" onclick="hapusItem(this)">HAPUS</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                <br>
                <hr>
                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-3 text-right">
                        TOTAL :
                    </div>
                    <div class="col-md-3">
                        <div class="text-right" id="total-text">
                            0
                        </div>
                    </div>
                </div>
                <hr>
                <br>
                <div class="text-center">
                    <input type="submit" value="Buat Pesanan" class="btn btn-primary">
                </div>
                <br>
            </form>
        </div>
    </div>
</body>

<script type="text/javascript">
    var price={};
    var options = "";
    <?php
        $base = mysqli_query($con, $hargapizza) or die(mysqli_error($con)); 
    ?>
    var base = <?php 
                 $values = mysqli_fetch_array($base);
                 echo $values["hargaPizza"];
                ?>;
    <?php 
        $topping= mysqli_query($con, $sqltopping) or die(mysqli_error($con));

        while($toppings = mysqli_fetch_array($topping)): 
    ?>
        options+="<?php echo "<option value=".$toppings['idTopping']." data-subtext='".$toppings['hargaTopping']."'>".$toppings['namaTopping']."</option>" ?>";
        price[<?php echo $toppings['idTopping'] ?>] = <?php echo $toppings['hargaTopping'] ?>;
    <?php ;endwhile; ?>
    var table = document.getElementById("example");
    function pilih_topping(topping_id, topping_name, topping_price) {
        $('#topping_id').val(topping_id);
        $('#topping_name').val(topping_name);
        $('#topping_price').val(topping_price);
        $('#edit_topping').click();
    }

    function updateHarga(params){
        var row_idx = params.parentNode.parentNode.parentNode.rowIndex;
        var option_id = params.id;
        var values = $('#'+option_id).val();
        var total = base;
        for (var i = 0; i < values.length; i++) {
            total+= price[values[i]];
        }
        table.rows[row_idx].cells[2].innerHTML = total;
        hitungTotal();
    }

    function hitungTotal(){
        var totals = 0;
        var tr_length = table.rows.length;
        for (var i = 1; i < tr_length; i++) {
            var str_subtotal = table.rows[i].cells[2].innerHTML;
            totals += parseInt(str_subtotal);
        }
        document.getElementById("total-text").innerHTML = totals;
        document.getElementById("grand-total").value = totals;
    }

    function hapusItem(params){
        var row_idx = params.parentNode.parentNode.rowIndex;
        if(table.rows.length > 2){
            table.deleteRow(row_idx);
            hitungTotal();
        }
    }
    var counter = 2;
    function addNewRow(){
        var row = table.insertRow(table.rows.length);

        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);
        var cell3 = row.insertCell(2);
        var cell4 = row.insertCell(3);

        cell1.innerHTML = "Pizza "+counter;
        cell2.innerHTML = '<select class="selectpicker form-control" data-live-search="true" multiple onchange="updateHarga(this)" id="'+counter+'" name="topping['+counter+'][]">'+options+'</select>'; 
        cell3.innerHTML = '0'; 
        cell4.innerHTML = '<button class="btn btn-danger form-control" onclick="hapusItem(this)">HAPUS</button>'; 
        $('#'+counter).selectpicker('refresh');
        counter++;
    }

</script>



</html>