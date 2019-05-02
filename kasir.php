<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">
    <script src="index.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


    <title>Document</title>
</head>

<body>
    
    <nav class="navbar navbar-light" style="background-color: #c59579;">
        <a class="navbar-brand" href="index.php">
            <img class="pizzaImage" src="pizzaretro.png" width="30" height="30" class="d-inline-block align-top" alt="">
            Pizzay</a>
    </nav>

    <div class="container" id="selectContainer">

        <center>
            <h1 class="judulAwal" style="top:-10%">Laman Kasir</h1>
        </center>
        <center>
            <h3 class="judulAwal">Menu Pesanan Topping</h3>
        </center>

        

        <div class="container">
            <div class="row">
                <form method="get">
                 <div class="form-group">	
                     <div class="col-md-5"><label class="btn btn-primary"><img src="http://placehold.it/700x350&text=1" alt="..." class="img-thumbnail img-check img-responsive"><input type="checkbox" name="chk1" id="item4" value="val1" class="hidden" autocomplete="off"></label></div>
                 </div>
                 <input type="submit" value="Checkout" class="btn btn-primary">
                
                </form>
            </div>	
        </div>




    </div>
    <?php
?>
</body>

</html>