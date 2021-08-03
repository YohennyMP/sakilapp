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
    <div class="banner h-100">
        <div class=" container text-capitalize col-md-8 w-75 p-5 larger shadow h-100 shadow-lg rounded">
            <h1 class=" text-center text-white fw-bold animate__animated animate__bounce animate__repeat-3 p-3">actores</h1>
            <form class="" action="actor.php" method="post">
                <input type="text" name="nom" class="form-control my-1" placeholder="nombre">
                <input type="text" name="apellido" class="form-control my-1" placeholder="apelllido">
                <button type="submit" class="btn btn-primary" name="insertar"><i class="bi bi-save pl-2"></i>Guardar</button>
            </form>
            <form class="h-25" action="actor.php" method="get">
                <input name="nombre" class="form-control" type="search" placeholder="Buscar" aria-label="Search">
                <button name= "buscar" class="btn btn-primary my-1" type="submit"><i class="bi bi-search pl-2"></i>Buscar</button>
            </form>
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
            </thead>
            <tbody class="larger shadow">
            <?php
            while($dato = mysqli_fetch_assoc($actores)){
                echo "<tr>
                    <th scope='row'>{$dato['actor_id']}</th>
                    <th>{$dato['first_name']}</th>
                    <th>{$dato['last_name']}</th>
                    <th class='overflow-hidden ml-5 mr-5'>{$dato['last_update']}
                        <i class='fa fa-close p-2 ml-5 justify-content-end border rounded border-primary text-white bg-primary'></i>
                        <i class='fa fa-pencil p-2 ml-1 border rounded border-primary text-white bg-primary'></i>
                    </th>
                </tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
<?php include_once "partes/foot.php";?>