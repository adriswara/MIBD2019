<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">
    <script src="js/index.js"></script>
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


    
    <div class="container" id="selectContainer">

        <center>
            <h1 class="judulAwal" style="top:-10%">Laman Admin</h1>
        </center>
        <center>
            <h3 class="judulAwal">Menu Pesanan Topping</h3>
        </center>

        <input type="submit" value="Tambah Topping" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
        <input type="submit" value="Hapus Topping" class="btn btn-primary">       
        
        
<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Silahkan Input topping</h4>
      
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <span>nama topping</span> <input type="text">

        <!-- Upload Photo -->

        <div class="container">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Silahkan Unggah Foto</label>
                     <div class="input-group">
                         <span class="input-group-btn">
                             <span class="btn btn-primary btn-file">
                         Browse… <input type="file" id="imgInp">
                            </span>
                        </span>
                        <input type="text" class="form-control" readonly>
                       
                     </div>
                <img id='img-upload'/>
                </div>
            </div>
        </div>
         <!-- -->
 
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
      <button type="button" class="btn btn-danger" data-dismiss="modal">Submit</button>
      <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
      </div>

    </div>
  </div>
</div>

        <div class="container">
            <div class="scrollmenu">
                <div class="row" style="height: 23vh;"> 
                    <form method="get" style="height:19vh;margin: 40px;">
                        <div class="form-group">	
                            <div class="imageContent"><label class="btn btn-primary"><img class="toppingImage" src="http://placehold.it/700x350&text=1" alt="..." class="img-check img-responsive"><input type="checkbox" name="chk1" id="item4" value="val1" class="hidden" autocomplete="off"></label></div>
                            <div class="imageContent"><label class="btn btn-primary"><img class="toppingImage" src="http://placehold.it/700x350&text=1" alt="..." class=" img-check img-responsive"><input type="checkbox" name="chk1" id="item4" value="val1" class="hidden" autocomplete="off"></label></div>
                            <div class="imageContent"><label class="btn btn-primary"><img class="toppingImage" src="http://placehold.it/700x350&text=1" alt="..." class=" img-check img-responsive"><input type="checkbox" name="chk1" id="item4" value="val1" class="hidden" autocomplete="off"></label></div>
                            <div class="imageContent"><label class="btn btn-primary"><img class="toppingImage" src="http://placehold.it/700x350&text=1" alt="..." class=" img-check img-responsive"><input type="checkbox" name="chk1" id="item4" value="val1" class="hidden" autocomplete="off"></label></div>
                            <div class="imageContent"><label class="btn btn-primary"><img class="toppingImage" src="http://placehold.it/700x350&text=1" alt="..." class=" img-check img-responsive"><input type="checkbox" name="chk1" id="item4" value="val1" class="hidden" autocomplete="off"></label></div>
                            <div class="imageContent"><label class="btn btn-primary"><img class="toppingImage" src="http://placehold.it/700x350&text=1" alt="..." class=" img-check img-responsive"><input type="checkbox" name="chk1" id="item4" value="val1" class="hidden" autocomplete="off"></label></div>
                            <div class="imageContent"><label class="btn btn-primary"><img class="toppingImage" src="http://placehold.it/700x350&text=1" alt="..." class=" img-check img-responsive"><input type="checkbox" name="chk1" id="item4" value="val1" class="hidden" autocomplete="off"></label></div>
                        </div>
                    </form>
                </div>	
            </div>
        </div>
</div>





    
    <?php
    ?>

</body>

</html>