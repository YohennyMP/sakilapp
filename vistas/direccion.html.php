<?php
include_once "vistas/partes/head.php";
?>
                <form class="py-5" action="" method="post">
                    <input type="text" name="direccion" class="form-control my-1" placeholder="direccion">
                    <input type="text" name="direccion 2" class="form-control my-1" placeholder="direccion 2">
                    <input type="text" name="distrito" class="form-control my-1" placeholder="distrito">
                    <input type="date" name="codigo de ciudad" class="form-control my-1">
                    <input type="text" name="codigo postal" class="form-control my-1" placeholder="codigo postal">
                    <input type="text" name="telefono" class="form-control my-1" placeholder="telefono">
                    <input type="text" name="ubicacion" class="form-control my-1" placeholder="ubicacion">
                    <button type="submit" class="btn btn-primary" name="insertar"><i class="bi bi-save px-2"></i>Guardar</button>
                </form>
                <form class="" action="" method="get">
                    <input name="nombre" class="form-control" type="search" placeholder="Buscar" aria-label="Search">
                    <button name= "buscar" class="btn btn-primary" type="submit"><i class="bi bi-search px-2"></i>Buscar</button>
                </form>
                <div><?php echo $_SESSION['mensaje'] ?? ""; ?></div>
            </div>
        </div>
    </div>
        <div class="container">
        <hr>
        <table class="col-md-12 text-center table table-striped larger shadow">
            <thead class="thead thead-primary text-dark text-capitalize">
            <th scope='col' class="">codigo</th>
            <th scope='col' class="">nombre</th>
            <th scope='col' class="">apellido</th>
            <th scope='col' class="">fecha</th>
            <th scope='col' class="">acciones</th>
            </thead>
            <tbody class="larger shadow">
            <?php
            while($dato = mysqli_fetch_assoc($resultado)){
                echo "<tr>
                    <td scope='row'>{$dato[actor_id]}</td>
                    <td>{$dato[first_name]}</td>
                    <td>{$dato[last_name]}</td>
                    <td class='overflow-hidden'>{$dato[last_update]}</td>
                    <td>
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