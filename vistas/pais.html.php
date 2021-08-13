<?php require_once 'vistas/parte/head.php'; require_once 'vistas/parte/menu.php';?>

<div class="centrar">
    <div class="container">
        <form id="contact" action="" method="post">
            <h3>Actores</h3>
            <h4>Formulario para ingresar los actores</h4>

            <input type="hidden" name="id" value="<?php echo $info['actor_id'] ?? '' ?>">

            <fieldset>
                <input placeholder="Ingrese su nombre" name="nombre" value="<?php echo $info['first_name'] ?? '' ?>"
                    type="text" tabindex="1" required autofocus>
            </fieldset>
            <fieldset>
                <input placeholder="Inserte su apellido" name="apellido" value="<?php echo $info['last_name'] ?? '' ?>"
                    type="text" tabindex="2" required>
            </fieldset>
                  <div>
                <?php echo $_SESSION['mensaje'] ?? "" ?>
            </div>
            <fieldset>
                <button name="insetar" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
            </fieldset>
        </form>
    </div>

    <div class="container2">
        <section class="codepen-tabla">
            <div class="tbl-header">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th></th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="tbl-content">
                <table>
                    <tbody>
                        
                        <?php

                            while ($dato = mysqli_fetch_assoc($resultado)) {
                                echo "<tr>
                                        <td>{$dato['country_id']}</td>
                                        <td>{$dato['country']}</td>
                                        <td>{$dato['last_update']}</td>
                                        <th>
                                        <a href='pais.php?eliminar={$dato['country_id']}'><i class='p-2 fa fa-close border rounded border-dark text-danger'></i></a>
                                        <a href='pais.php?editar={$dato['country_id']}'><i class='p-2 fa fa-pencil border rounded border-dark text-dark'></i></a>
                                        </th>
                                    </tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
</div>

<?php require_once 'vistas/parte/foot.php'; ?>