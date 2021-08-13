<?php
include_once "vistas/partes/head.php";
?>
            <form class="m-1" action="" method="post">
                <input value="<?php echo $info['name'] ?? ''; ?>" type="text" name="categoria" class="form-control my-1" placeholder="Nombre de la categoria">
                <button type="submit" class="btn btn-primary" name="insertar"><i class="fa fa-save pr-2"></i>Guardar</button>
                <input type="hidden" name="id" value="<?php echo $info['category_id'] ?? ''; ?>">
            </form>
            <form class="" action="" method="get">
                <input name="nombre" class="form-control" type="search" placeholder="Buscar" aria-label="Search">
                <button name= "buscar" class="btn btn-primary m-1" type="submit"><i class="fa fa-search pr-2"></i>Buscar</button>
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
            <th scope='col' class="">categoria</th>
            <th scope='col' class="">fecha</th>
            <th scope='col' class="">acciones</th>
            </thead>
            <tbody class="larger shadow">
            <?php
            while($dato = mysqli_fetch_assoc($categorias)){
                echo "<tr>
                    <td scope='row'>{$dato['category_id']}</td>
                    <td>{$dato['name']}</td>
                    <td>{$dato['last_update']}</td>
                    <td>
                        <a href='categoria.php?eliminar={$dato['category_id']}'><i class='p-2 fa fa-close border rounded border-dark text-danger'></i></a>
                        <a href='categoria.php?editar={$dato['category_id']}'><i class='p-2 fa fa-pencil border rounded border-dark text-dark'></i></a>
                    </td>
                </tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
<?php include_once "partes/foot.php";?>