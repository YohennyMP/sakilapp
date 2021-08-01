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
      <div class="container">
        <div class="row">
          <div class="col-md-8 offset-md-2">
            <div class="header-text caption">
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
                <h1>Tablas</h1>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="service-item">
                <a href="index.html"> <i class="fa fa-cloud"></i>
                <h4>VPS Cloud</h4> </a>
                <p>Texto de ejemplo</p>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="service-item">
                <i class="fa fa-server"></i>
                <a href="index.html"> </a><h4>Fast Network</h4>
                <p>Texto de ejemplo</p> </a>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="service-item">
                <i class="fa fa-database"></i>
                <h4>Reliable Platform</h4>
                <p>Texto de ejemplo</p>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="service-item">
                <i class="fa fa-save"></i>
                <h4>Managed CDN</h4>
                <p>Texto de ejemplo</p>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="service-item">
                <i class="fa fa-check"></i>
                <h4>Optimal Hosting</h4>
                <p>Texto de ejemplo</p>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="service-item">
                <i class="fa fa-support"></i>
                <h4>Customer Support</h4>
                <p>Texto de ejemplo</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>
<?php include_once "vistas/partes/foot.php"; ?>