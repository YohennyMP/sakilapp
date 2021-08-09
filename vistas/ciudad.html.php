<?php
include_once "vistas/partes/head.php";
?>
                <form class="py-5" action="actor.php" method="post">
                    <input type="text" name="ciudad" class="form-control my-1" placeholder="ciudad">
                    <input type="text" name="pais_id" class="form-control my-1" placeholder="codigo de pais">
                    <button type="submit" class="btn btn-primary" name="insertar"><i class="fa fa-save px-2"></i>Guardar</button>
                </form>
                <form class="h-25" action="actor.php" method="get">
                    <input name="nombre" class="form-control" type="search" placeholder="Buscar" aria-label="Search">
                    <button name= "buscar" class="btn btn-primary my-1" type="submit"><i class="fa fa-search px-2"></i>Buscar</button>
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
                    <td scope='row'>{$dato['city_id']}</td>
                    <td>{$dato['city']}</td>
                    <td>{$dato['country_id']}</td>
                    <td class='overflow-hidden'>{$dato['last_update']}</td>
                    <td>
                        <a href='ciudad.php?eliminar={$dato['actor_id']}'><i class='p-2 fa fa-close border rounded border-dark text-danger'></i></a>
                        <a href='ciudad.php?editar={$dato['actor_id']}'><i class='p-2 fa fa-pencil border rounded border-dark text-dark'></i></a>
                    </td>
                </tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
<?php include_once "partes/foot.php";?>