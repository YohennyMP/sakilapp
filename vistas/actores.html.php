<?php
include_once "vistas/partes/head.php";
?>
    
<form action="" method="post">

                <input type="text" name="nom" value="<?php echo $info['first_name'] ?? ""; ?>" class="form-control my-1" placeholder="nombre">

                <input type="text" name="apellido" value="<?php echo $info['last_name'] ?? ""; ?>" class="form-control my-1" placeholder="apelllido">

                <button type="submit" class="btn btn-primary mb-1" name="insertar"><i class="fa fa-save pr-2"></i>Guardar</button>

                    <input type="hidden" name="id" value="<?php echo $info['actor_id'] ?? ''; ?>">

                </form>



                
                <form action="" method="get">
                    <input name="nombre" class="form-control" type="search" placeholder="Buscar" aria-label="Search">
                    <button name= "buscar" class="btn btn-primary my-1" type="submit"><i class="fa fa-search pr-2"></i>Buscar</button>
                </form>
                <div><?php echo $_SESSION['mensaje'] ?? ""; ?></div>
            </div>
        </div>
    </div>
    <hr>
    <div class="container">
        <table class="text-center table table-striped larger shadow w-100">
            <thead class="text-dark text-capitalize">
            <th scope='col'>#</th>
            <th scope='col'>nombre</th>
            <th scope='col'>apellido</th>
            <th scope='col'>ult. modificacion</th>
            <th scope='col'>acciones</th>
            </thead>
            <tbody>
            <?php
            while($dato = mysqli_fetch_assoc($actores)){
                echo "<tr>
                    <td scope='row'>{$dato['actor_id']}</td>
                    <td>{$dato['first_name']}</th>
                    <td>{$dato['last_name']}</th>
                    <td>{$dato['last_update']}</td>
                    <td>
                        <a href='actor.php?eliminar={$dato['actor_id']}'><i class='p-2 fa fa-close border rounded border-dark text-danger'></i></a>
                        <a href='actor.php?editar={$dato['actor_id']}'><i class='p-2 fa fa-pencil border rounded border-dark text-dark'></i></a>
                    </td>
                </tr>";
            }
            ?>
            </tbody>
        </table>
    </div>


<?php include_once "partes/foot.php";?>