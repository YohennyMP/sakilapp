<?php
include_once "vistas/partes/head.php";
?>
                <form class="py-5" action="" method="post">
                    <input type="text" name="titulo" class="form-control my-1" placeholder="titulo">
                    <input type="text" name="descripcion" class="form-control my-1" placeholder="descripcion">
                    <input type="text" name="" class="form-control my-1" placeholder="ano de lanzamiento">
                    <input type="text" name="" class="form-control my-1" placeholder="codigo de idioma">
                    <input type="text" name="" class="form-control my-1" placeholder="idioma original">
                    <input type="text" name="" class="form-control my-1" placeholder="duracion">
                    <input type="text" name="" class="form-control my-1" placeholder="rental rate">
                    <input type="text" name="" class="form-control my-1" placeholder="length">
                    <input type="text" name="" class="form-control my-1" placeholder="costo re">
                    <input type="text" name="" class="form-control my-1" placeholder="rating">
                    <input type="text" name="" class="form-control my-1" placeholder="features especial">
                    <button type="submit" class="btn btn-primary" name="insertar"><i class="fa fa-save px-2"></i>Guardar</button>
                </form>
                <form class="h-25" action="" method="get">
                    <input name="nombre" class="form-control" type="search" placeholder="Buscar" aria-label="Search">
                    <button name= "buscar" class="btn btn-primary m-1" type="submit"><i class="fa fa-search px-2"></i>Buscar</button>
                </form>
            </div>
        </div>
    </div>
        <div class="m-2">
        <hr>
        <table class="w-100 text-center table table-striped larger shadow">
            <thead class="thead thead-primary text-dark text-capitalize">
            <th scope='col' class="">#</th>
            <th scope='col' class="">titulo</th>
            <th scope='col' class="">desc</th>
            <th scope='col' class="">ano</th>
            <th scope='col' class="">idioma</th>
            <th scope='col' class="">idioma original</th>
            <th scope='col' class="">duracion</th>
            <th scope='col' class="">rental rate</th>
            <th scope='col' class="">lenght</th>
            <th scope='col' class="">costo re</th>
            <th scope='col' class="">rating</th>
            <th scope='col' class="">especial</th>
            <th scope='col' class="">ult. mod</th>
            <th scope='col' class="">acciones</th>
            </thead>
            <tbody class="larger shadow">
            <?php
            while($dato = mysqli_fetch_assoc($peliculas)){
                echo "<tr>
                    <td >{$dato[film_id]}</td>
                    <td >{$dato[title]}</td>
                    <td >{$dato[description]}</td>
                    <td >{$dato[release_year]}</td>
                    <td >{$dato[language_id]}</td>
                    <td >{$dato[original_language_id]}</td>
                    <td >{$dato[rental_duration]}</td>
                    <td >{$dato[rental_rate]}</td>
                    <td >{$dato[length]}</td>
                    <td scope='row'>{$dato[replacement_cost]}</td>
                    <td scope='row'>{$dato[rating]}</td>
                    <td scope='row'>{$dato[special_features]}</td>
                    <td scope='row'>{$dato[last_update]}</td>
                    <td scope='row'>
                        <i class='ml-5 p-2 fa fa-close justify-content-end border rounded border-dark text-danger'></i>
                        <i class='p-2 fa fa-pencil border rounded border-dark text-dark'></i>
                    </td>
                </tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
<?php include_once "partes/foot.php";?>