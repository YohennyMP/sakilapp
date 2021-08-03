<?php 
include_once "partes/head.php";
include_once "partes/menu.php"; ?>
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
                <form action="" method="post">
                  <input class="form-control my-2" placeholder="idioma" type="text" name="idioma" id="">
                  <button name="guardar" class="btn btn-primary my-2" type="submit"><i class="fa fa-save mr-2">Guardar</i></button>
                </form>
                <form action="" method="get">
                  <input class="form-control my-2" placeholder="buscar" type="text" name="nombre" id="">
                  <button class="btn btn-primary my-2" type="submit"><i class="fa fa-search mr-2" name="buscar"></i>Buscar</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    <div class="container">
        <hr>
        <table class="col-md-12 text-center table table-striped larger shadow">
            <thead class="thead thead-primary text-dark text-capitalize">
            <th scope='col' class="">codigo idioma</th>
            <th scope='col' class="">idioma</th>
            <th scope='col' class="">ultima modificacion</th>
            </thead>
            <tbody class="larger shadow">
            <?php
            while($dato = mysqli_fetch_assoc($resultado)){
                echo "<tr>
                    <th scope='row'>{$dato[language_id]}</th>
                    <th>{$dato[name]}</th>
                    <th class='overflow-hidden ml-5 mr-5'>{$dato[last_update]}
                        <i class='fa fa-close p-2 ml-5 justify-content-end border rounded border-primary text-white bg-primary'></i>
                        <i class='fa fa-pencil p-2 ml-1 border rounded border-primary text-white bg-primary'></i>
                    </th>
                </tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
    </div>
<?php include_once "vistas/partes/foot.php"; ?>