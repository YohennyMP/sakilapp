<?php
include_once "vistas/partes/head.php";
?>
                <form class="py-5" action="" method="post">
                    <input type="text" name="ciudad" value="<?php echo $info['city'] ?? ''; ?>" class="form-control my-1" placeholder="ciudad">
                    <input type="text" name="pais_id" value="<?php echo $info['country_id'] ?? ''; ?>" class="form-control my-1" placeholder="codigo de pais">
                    <button type="submit" class="btn btn-primary" name="insertar"><i class="fa fa-save px-2"></i>Guardar</button>
                    <input type="hidden" name="id" value="<?php echo $info['city_id'] ?? ''; ?>">
                
                </form>
                <form class="h-25" action="" method="get">
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
            <th scope='col' class="">#</th>
            <th scope='col' class="">ciudad</th>
            <th scope='col' class=""># pais</th>
            <th scope='col' class="">ult. edicion</th>
            <th scope='col' class="">acciones</th>
            </thead>
            <tbody class="larger shadow">
            <?php
            while($dato = mysqli_fetch_assoc($ciudad)){
                echo "<tr>
                    <td scope='row'>{$dato['city_id']}</td>
                    <td>{$dato['city']}</td>
                    <td>{$dato['country_id']}</td>
                    <td>{$dato['last_update']}</td>
                    <td>
                        <a href='ciudad.php?eliminar={$dato['city_id']}'><i class='p-2 fa fa-close border rounded border-dark text-danger'></i></a>
                        <a href='ciudad.php?editar={$dato['city_id']}'><i class='p-2 fa fa-pencil border rounded border-dark text-dark'></i></a>
                    </td>
                </tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
<?php include_once "partes/foot.php";?>