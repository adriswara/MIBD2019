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


    
    <div class="container containerLuar" id="selectContainer">

        <div class="header" style ="height: 100px;">
            <h3 class="judulAwal" style="top:-10%">Halaman Admin</h3>
            
        </div>
        
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link nav-item active" role="tab" aria-controls="toppingUID" data-toggle="tab" href="#toppingUID">Topping</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"  role="tab" aria-controls="adminUID" data-toggle="tab" href="#adminUID">Admin</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"  role="tab" aria-controls="kasirUID" data-toggle="tab" href="#kasirUID">Kasir</a>
            </li>
          
        </ul>
            
        
        <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
		<div class="tab-pane fade show active" id="toppingUID" role="tabpanel" aria-labelledby="nav-home-tab">
        <h5 class="py-3">Edit Data Topping</h5>
        <input type="submit" value="Tambah Topping" class="btn btn-secondary" data-toggle="modal" data-target="#myModal">
        <input type="submit" value="Hapus Topping" class="btn btn-danger">       
        
        
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

        <div class="container px-0 py-2">
            <div class="scrollmenu">
                <div class="row" style="height: 210px;"> 
                    <form method="get" style="height:19vh;margin: 40px;">
                        <div class="form-group">	
                            <div class="imageContent"><label class="btn btn-light"><div style="height: 106px;"><img class="toppingImage" src="http://placehold.it/700x350&text=1" alt="..." class="img-check img-responsive"></div><input type="checkbox" name="chk1" id="item4" value="val1" class="checkboxCustom" autocomplete="off"></label></div>
                            <div class="imageContent"><label class="btn btn-light"><div style="height: 106px;"><img class="toppingImage" src="http://placehold.it/700x350&text=1" alt="..." class="img-check img-responsive"></div><input type="checkbox" name="chk1" id="item4" value="val1" class="checkboxCustom" autocomplete="off"></label></div>
                            <div class="imageContent"><label class="btn btn-light"><div style="height: 106px;"><img class="toppingImage" src="http://placehold.it/700x350&text=1" alt="..." class="img-check img-responsive"></div><input type="checkbox" name="chk1" id="item4" value="val1" class="checkboxCustom" autocomplete="off"></label></div>
                            <div class="imageContent"><label class="btn btn-light"><div style="height: 106px;"><img class="toppingImage" src="http://placehold.it/700x350&text=1" alt="..." class="img-check img-responsive"></div><input type="checkbox" name="chk1" id="item4" value="val1" class="checkboxCustom" autocomplete="off"></label></div>
                            <div class="imageContent"><label class="btn btn-light"><div style="height: 106px;"><img class="toppingImage" src="http://placehold.it/700x350&text=1" alt="..." class="img-check img-responsive"></div><input type="checkbox" name="chk1" id="item4" value="val1" class="checkboxCustom" autocomplete="off"></label></div>
                            <div class="imageContent"><label class="btn btn-light"><div style="height: 106px;"><img class="toppingImage" src="http://placehold.it/700x350&text=1" alt="..." class="img-check img-responsive"></div><input type="checkbox" name="chk1" id="item4" value="val1" class="checkboxCustom" autocomplete="off"></label></div>
                          
                        </div>
                    </form>
                </div>	
            </div>
        </div>
        
					</div>
					<div class="tab-pane fade" id="adminUID" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <h5 class="py-3">Edit Data Admin</h5>
        <input type="submit" value="Tambah Admin" class="btn btn-secondary" data-toggle="modal" data-target="#myModal">
        <input type="submit" value="Hapus Admin" class="btn btn-danger">       
        
        
        <!-- The Modal -->
        <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Silahkan Input Admin</h4>
            
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <span>nama admin</span> <input type="text">

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

        <div class="container px-0 py-2">
            <div class="scrollmenu">
                <div class="row" style="height: 210px;"> 
                    <form method="get" style="height:19vh;margin: 40px;">
                        <div class="form-group">	
                            <div class="imageContent"><label class="btn btn-light"><div style="height: 106px;"><img class="toppingImage" src="http://placehold.it/700x350&text=1" alt="..." class="img-check img-responsive"></div><input type="checkbox" name="chk1" id="item4" value="val1" class="checkboxCustom" autocomplete="off"></label></div>
                            <div class="imageContent"><label class="btn btn-light"><div style="height: 106px;"><img class="toppingImage" src="http://placehold.it/700x350&text=1" alt="..." class="img-check img-responsive"></div><input type="checkbox" name="chk1" id="item4" value="val1" class="checkboxCustom" autocomplete="off"></label></div>
                            <div class="imageContent"><label class="btn btn-light"><div style="height: 106px;"><img class="toppingImage" src="http://placehold.it/700x350&text=1" alt="..." class="img-check img-responsive"></div><input type="checkbox" name="chk1" id="item4" value="val1" class="checkboxCustom" autocomplete="off"></label></div>
                            <div class="imageContent"><label class="btn btn-light"><div style="height: 106px;"><img class="toppingImage" src="http://placehold.it/700x350&text=1" alt="..." class="img-check img-responsive"></div><input type="checkbox" name="chk1" id="item4" value="val1" class="checkboxCustom" autocomplete="off"></label></div>
                            <div class="imageContent"><label class="btn btn-light"><div style="height: 106px;"><img class="toppingImage" src="http://placehold.it/700x350&text=1" alt="..." class="img-check img-responsive"></div><input type="checkbox" name="chk1" id="item4" value="val1" class="checkboxCustom" autocomplete="off"></label></div>
                            <div class="imageContent"><label class="btn btn-light"><div style="height: 106px;"><img class="toppingImage" src="http://placehold.it/700x350&text=1" alt="..." class="img-check img-responsive"></div><input type="checkbox" name="chk1" id="item4" value="val1" class="checkboxCustom" autocomplete="off"></label></div>
                          
                        </div>
                    </form>
                </div>	
            </div>
        </div>
        
					</div>
					<div class="tab-pane fade" id="kasirUID" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <h5 class="py-3">Edit Data Kasir</h5>
        <input type="submit" value="Tambah Kasir" class="btn btn-secondary" data-toggle="modal" data-target="#myModal">
        <input type="submit" value="Hapus Kasir" class="btn btn-danger">       
        
        
        <!-- The Modal -->
        <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Silahkan Input Kasir</h4>
            
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <span>nama Kasir</span> <input type="text">

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

        <div class="container px-0 py-2">
            <div class="scrollmenu">
                <div class="row" style="height: 210px;"> 
                    <form method="get" style="height:19vh;margin: 40px;">
                        <div class="form-group">	
                            <div class="imageContent"><label class="btn btn-light"><div style="height: 106px;"><img class="toppingImage" src="http://placehold.it/700x350&text=1" alt="..." class="img-check img-responsive"></div><input type="checkbox" name="chk1" id="item4" value="val1" class="checkboxCustom" autocomplete="off"></label></div>
                            <div class="imageContent"><label class="btn btn-light"><div style="height: 106px;"><img class="toppingImage" src="http://placehold.it/700x350&text=1" alt="..." class="img-check img-responsive"></div><input type="checkbox" name="chk1" id="item4" value="val1" class="checkboxCustom" autocomplete="off"></label></div>
                            <div class="imageContent"><label class="btn btn-light"><div style="height: 106px;"><img class="toppingImage" src="http://placehold.it/700x350&text=1" alt="..." class="img-check img-responsive"></div><input type="checkbox" name="chk1" id="item4" value="val1" class="checkboxCustom" autocomplete="off"></label></div>
                            <div class="imageContent"><label class="btn btn-light"><div style="height: 106px;"><img class="toppingImage" src="http://placehold.it/700x350&text=1" alt="..." class="img-check img-responsive"></div><input type="checkbox" name="chk1" id="item4" value="val1" class="checkboxCustom" autocomplete="off"></label></div>
                            <div class="imageContent"><label class="btn btn-light"><div style="height: 106px;"><img class="toppingImage" src="http://placehold.it/700x350&text=1" alt="..." class="img-check img-responsive"></div><input type="checkbox" name="chk1" id="item4" value="val1" class="checkboxCustom" autocomplete="off"></label></div>
                            <div class="imageContent"><label class="btn btn-light"><div style="height: 106px;"><img class="toppingImage" src="http://placehold.it/700x350&text=1" alt="..." class="img-check img-responsive"></div><input type="checkbox" name="chk1" id="item4" value="val1" class="checkboxCustom" autocomplete="off"></label></div>
                          
                        </div>
                    </form>
                </div>	
            </div>
        </div>
        
					</div>
					
		</div>
        
    
       
        
    





    
    <?php
    ?>

</body>

</html>