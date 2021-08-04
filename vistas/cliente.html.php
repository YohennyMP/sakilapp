<?php
include_once "vistas/partes/head.php";
?>
                <form class="py-5" action="" method="post">
                    <input type="text" name="store_id" class="form-control my-1" placeholder="codigo de tienda">
                    <input type="text" name="first_name" class="form-control my-1" placeholder="nombre">
                    <input type="text" name="last_name" class="form-control my-1" placeholder="apelllido">
                    <input type="email" name="email" class="form-control my-1" placeholder="email">
                    <input type="text" name="address_id" class="form-control my-1" placeholder="codigo de direccion">
                    <select name="activo" class="form-control">
                        <option value="1">activo</option>
                        <option value="2">inactivo</option>

                    </select>
                    <input type="date" name="create_date" class="form-control my-1" placeholder="apelllido">
                    <button type="submit" class="btn btn-primary" name="insertar"><i class="bi bi-save px-2"></i>Guardar</button>
                </form>
                <form  action="" method="get">
                    <input name="nombre" class="form-control" type="search" placeholder="Buscar" aria-label="Search">
                    <button name= "buscar" class="btn btn-primary m-1" type="submit"><i class="bi bi-search px-2"></i>Buscar</button>
                </form>
                <div><?php echo $_SESSION['mensaje'] ?? ""; ?></div>
            </div>
        </div>
    </div>
        <div class="container bg-default">
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