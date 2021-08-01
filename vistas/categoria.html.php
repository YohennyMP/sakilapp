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
        <div class="container text-capitalize col-md-12 w-75 p-4 larger shadow bg-default">
            <div class="text-center">
                <h1 class="text-center my-5 fw-bold animate__animated animate__bounce animate__repeat-3">actores</h1>
            </div>
            <form class="py-5 " action="actor.php" method="post">
                <input type="text" name="actor_id" class="form-control my-1" placeholder="codigo de actor">
                <input type="text" name="nom" class="form-control my-1" placeholder="nombre">
                <input type="text" name="apellido" class="form-control my-1" placeholder="apelllido">
                <input type="date" name="ult_edicion" class="form-control my-1">
                <div class="col-12">
                    <button type="submit" class="btn btn-primary" name="insertar"><i class="bi bi-save px-2"></i>Guardar</button>
                </div>
            </form>
            <form action="actor.php" method="get">
                <input name="nombre" class="form-control" type="search" placeholder="Buscar" aria-label="Search">
                <button name= "buscar" class="btn" type="submit"><i class="bi bi-search px-2"></i>Buscar</button>
            </form>
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
            </thead>
            <tbody class="larger shadow">
            <?php
            while($dato = mysqli_fetch_assoc($resultado)){
                echo "<tr>
                    <th scope='row'>{$dato[actor_id]}</th>
                    <th>{$dato[first_name]}</th>
                    <th>{$dato[last_name]}</th>
                    <th class='overflow-hidden'>{$dato[last_update]}
                        <i class='bi bi-x p-2 border rounded border-primary text-white bg-primary'></i>
                        <i class='bi bi-pencil p-2  border rounded border-primary text-white bg-primary'></i>
                    </th>
                </tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
<?php include_once "partes/foot.php";?>