<?php 
include_once "vistas/partes/head.php";
include_once "vistas/partes/menu.php"; ?>
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div> 
      <div class="banner">
        <div class="container">
          <div class="row">
            <div class="col-md-8 offset-md-2">
              <div class="header-text caption text-white">
                <form class="bg-light p-5 larger shadow bordered" action="" method="post">
                    <input type="text" name="category_id" class="form-control my-1" placeholder="codigo categoria">
                    <input type="text" name="name" class="form-control my-1" placeholder="nombre">
                    <input type="text" name="last_update" class="form-control my-1" placeholder="ultima modificacion">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary" name="insertar"><i class="fa fa-save px-2"></i>Guardar</button>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="table table-sucessfuly">    
    </div>
<?php include_once "vistas/partes/foot.php"; ?>