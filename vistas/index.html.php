<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title><?php echo $pagina ?></title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-host-cloud.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body>
<?php
include_once "vistas/partes/menu.php"; ?>
<div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div> 
    <div class="banner">
        <div class="container text-capitalize w-75 p-5 larger shadow h-100 shadow-lg mb-5 rounded">
            <div class="header-text caption text-white">
                <h3 class="p-5">Bienvenidos a sakila</h3>
                <p class="text-white text-capitalize p-2">una app de peliculas, actores y mucho mas</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
      <div class="services-section services-page">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="section-heading">
              </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="service-item">
                <a href="actor.php"> <i class="fa fa-user"></i>
                <h4>Actores</h4> </a>
                <p>Registro y visualizacion de actores que participan en las peliculas.</p>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="service-item">
                <a href="pelicula.php">
                  <i class="fa fa-camera"></i>
                  <h4>Peliculas</h4>
                </a>
                <p>Vease un listado de peliculas a su disposicion.</p> </a>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="service-item">
              <a href="tienda.php">
                <i class="bi bi-pin"></i>
                <h4>ubicanos</h4>
                <p>Diferentes localizaciones en todos los lugares disponibles.</p>
              </a>
              </div>
            </div>
          </div>
      </div>
    </div>
<?php include_once "vistas/partes/foot.php"; ?>