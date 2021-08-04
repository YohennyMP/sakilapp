<?php
include_once "vistas/partes/head.php";
?>
            <form class="m-1" action="" method="post">
                <input type="text" name="categoria" class="form-control my-1" placeholder="Nombre de la categoria">
                <button type="submit" class="btn btn-primary" name="insertar"><i class="fa fa-save pr-2"></i>Guardar</button>
            </form>
            <form class="" action="" method="get">
                <input name="nombre" class="form-control" type="search" placeholder="Buscar" aria-label="Search">
                <button name= "buscar" class="btn btn-primary m-1" type="submit"><i class="fa fa-search pr-2"></i>Buscar</button>
            </form>
            
            </div>
        </div>
    </div>
        <div class="container bg-default">
        <hr>
        <table class="col-md-12 text-center table table-striped larger shadow">
            <thead class="thead thead-primary text-dark text-capitalize">
            <th scope='col' class="">codigo</th>
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
                        <a href='actores.php?editar={$dato['actor_id']}'><i class='p-2 fa fa-close border rounded border-dark text-danger'></i></a>
                        <a href='actores.php?eliminar={$dato['actor_id']}'><i class='p-2 fa fa-pencil border rounded border-dark text-dark'></i></a>
                    </td>
                </tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
<?php include_once "partes/foot.php";?>