<?php 
require_once("components/head.php");
require_once("components/navbar.php");
require_once("components/banner-index.php");

$texto1 = "El Proyecto";
$texto2 = "Desarrollo ubicado sobre la carretera 200, ";
$texto3 = "en el km 38 Compostela - Chapalilla, ";
$texto4 = "a un costado de la entrada principal a la carretera Compostela - Guadalajara que contará con 190 terrenos de 90 m2 y las mejores amenidades ofreciendo una ";
$texto5 = "excelente calidad de vida.";
$texto6 = "Terrenos de 90 m2 ";
$texto7 = "Precios";
$texto8 = "1 mes";
$texto9 = "3 meses";
$texto10 = "6 meses";
$texto11 = "Los precios están sujetos a cambios.";
$texto12 = "Amenidades";
$texto13 = "DISFRUTA";
$texto14 = "DE LAS AMENIDADES QUE GALICIA RESIDENCIAL TIENE PARA TI";
$texto15 = "Alberca";
$texto16 = "Casa Club";
$texto17 = "Áreas Verdes";
$texto18 = "Privacidad";
$texto19 = "Pista para Correr";
$texto20 = "Seguridad 24/7";
$texto21 = "Parque para Mascotas";
$texto22 = "Juegos Infantiles";
$texto23 = "Zona de Asador";
$texto24 = "Ubicación";
$texto25 = "¿Por qué invertir en Galicia Residencial?";
$texto26 = "Plusvalía - Ubicación Estratégica - Amenidades - Crecimiento de la Región.";
?>
        <!--about me start-->
        <section class="section pb-5 pt-5" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-12 mb-4" data-aos="fade-up">                        
                        <img class="separador" src="images/separador.png" alt="">                       
                        <h2 class="title titulo"><span class="title-border mr-4 pr-3"></span><?php echo $texto1; ?><span class="title-border ml-4 pl-3"></span></h2> 
                    </div>
                </div>
                <!-- end row -->
                <div class="row">
                    <div class="col-md-12" data-aos="fade-up">
                        <p class="text-muted text-proyect">
                        <?php echo $texto2; ?> <strong><?php echo $texto3; ?></strong><?php echo $texto4; ?><strong><?php echo $texto5; ?></strong>
                        </p>
                    </div>
                </div>
                <div class="estrella" data-aos="fade-up">
                    <img src="images/estrella-galicia.svg" alt="">
                </div>
                <!-- end row -->
                <div class="contenedor" data-aos="fade-right">
                    <div class="row">
                        <div class="col-12 col-lg-6 col-md-6 mt-4 pt-2">
                            <img class="img-fluid rounded about-img" src="images/fachada2.jpg" alt="" />
                            <div class="aposition-relative">
                            </div>
                        </div>

                        <div class="col-12 col-lg-6 col-md-6 mt-4 pt-2 text-center" data-aos="fade-left">
                            <p class="terrenos">
                                <strong><?php echo $texto6; ?> <br> <?php echo $texto7; ?></strong>
                            </p>
                            <p class="precios">
                            <?php echo $texto8; ?> - $270,000 <br>
                            <?php echo $texto9; ?> - $285,000 <br>
                            <?php echo $texto10; ?> - 300,000 
                            </p>
                            <p class="cambios"><?php echo $texto11; ?></p>
                            <div class="row">
                                <div class="col-6 col-lg-12 col-sm-12 pt-xl-3 pt-3">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about us end -->

        <!-- Amenidades -->
        <section class="section" id="portfolio" style="padding-top: 0rem; background: #344582;">
            <div class="container" style=";">
                <div class="row">
                    <div class="col-12 mb-4" data-aos="fade-up">
                        <h2 class="mb-0 title titulo" style="color: #fff; padding-top: 2rem;"><span class="title-border mr-4 pr-3"></span><?php echo $texto12; ?> <span class="title-border ml-4 pl-3"></span></h2>
                    </div>
                </div>
                <!-- end row -->

                <div class="row amenidades">
                    <div clas="col-12 col-lg-6 col-md-6" data-aos="fade-up">
                        <img class="img-fluid" style="width: 380px;" src="images/La Coruña.jpg" alt="">
                    </div>
                    <div class="col-12 col-lg-6 col-md-6" data-aos="fade-up">
                        <div class="card">
                            <div class="card-body" style="background-color: #344582;">
                                <h5 class="card-title disfruta"><?php echo $texto13; ?></h5>
                                <h6 class="card-subtitle mb-2 descrip-disfrutas"><?php echo $texto14; ?></h6>
                                <p class="ameni">
                                    <img src="images/estrella-galicia.svg" alt="" style="width: 20px;" >
                                    <?php echo $texto15; ?>
                                </p>
                                <p class="ameni" >
                                    <img src="images/estrella-galicia.svg" alt="" style="width: 20px;" >
                                    <?php echo $texto16; ?>
                                </p>
                                <p class="ameni">
                                    <img src="images/estrella-galicia.svg" alt="" style="width: 20px;" >
                                    <?php echo $texto17; ?>
                                </p>
                                <p  class="ameni">
                                    <img src="images/estrella-galicia.svg" alt="" style="width: 20px;" >
                                    <?php echo $texto18; ?>
                                </p>
                                <p  class="ameni">
                                    <img src="images/estrella-galicia.svg" alt="" style="width: 20px;" >
                                    <?php echo $texto19; ?>
                                </p>
                                <p class="ameni">
                                    <img src="images/estrella-galicia.svg" alt="" style="width: 20px;" >
                                    <?php echo $texto20; ?>
                                </p>
                                <p class="ameni">
                                    <img src="images/estrella-galicia.svg" alt="" style="width: 20px;" >
                                    <?php echo $texto21; ?>
                                </p>
                                <p class="ameni">
                                    <img src="images/estrella-galicia.svg" alt="" style="width: 20px;" >
                                    <?php echo $texto22; ?>
                                </p>
                                <p class="ameni">
                                    <img src="images/estrella-galicia.svg" alt="" style="width: 20px;" >
                                    <?php echo $texto23; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="">
                    <img src="images/La Coruña.jpg" alt="galicia"  style="width: 300px;">
                </div> -->
                    
            </div>
        </section>
        <!-- creative works end -->

        <!-- Ubicacion -->
        <section class="section pb-5 pt-5 bg-info" id="ubicacion">
            <div class="bg-overlay-3" ></div>
            <!-- <div style="position:absolute;top:0;left:0;right:0;bottom:0;background-color:#000000aa;"></div> -->
            <div class="container">
                <div class="row">
                    <div class="col-12 mb-5" data-aos="fade-down">                        
                        <h2 class="title titulo text-white"><?php echo $texto24; ?></h2>
                    </div>
                </div>
                <img class="img-fluid2" src="images/ubicaciones_galicia.jpg" alt="Ubicaciones de Galicia Residencial " data-aos="fade-down">
                <!-- <a class="image-link" href="images/ubicaciones_galicia.jpg">
                </a> -->
            </div>
        </section>
        <!-- my blog end -->
        <!-- parallax -->
        <section class="section parallax mt-0" id="parallax1">
            <div class="bg-overlay-2"></div>
            <div class="container text-center">
                <h2><?php echo $texto25; ?></h2>
                <p><h6><?php echo $texto26; ?></h6></p>
            </div>
        </section>
         <!-- WhatsApp -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <a href="https://wa.me/3111417959" class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
        </a>
  
<?php
require_once("components/contacto.php");
require_once("components/footer.php");
require_once("components/scripts.php");
?>