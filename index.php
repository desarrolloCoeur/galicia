<?php 
require_once("components/head.php");
require_once("components/navbar.php");
require_once("components/banner-index.php");
?>
        <!--about me start-->
        <section class="section" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-12 mb-4">                        
                        <img class="separador" src="images/separador.png" alt="">                       
                        <h2 class="title titulo"><span class="title-border mr-4 pr-3"></span> El Proyecto<span class="title-border ml-4 pl-3"></span></h2> 
                    </div>
                </div>
                <!-- end row -->
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-muted text-proyect">
                            Desarrollo ubicado sobre la carretera 200, <strong>en el km 38 Compostela - Chapalilla</strong>, a un costado de la entrada principal a la carretera Compostela - Guadalajara que contará con 190 terrenos de 90 m2 y las mejores amenidades ofreciendo una <strong>excelente calidad de vida.</strong>
                        </p>
                    </div>
                </div>
                <!-- end row -->
                <div class="row">
                    <div class="contenedor">
                        <div class="col-md-4 mt-4 pt-2">
                            <div class="aposition-relative">
                                <img class="img-fluid rounded about-img" src="images/fachada2.jpg" alt="" />
                            </div>
                        </div>

                        <div class="col-md-7 offset-md-1 mt-4 pt-2">
                            <div class="row">
                                <div class="col-12 pt-xl-3 pt-3">
                                    <p class="terrenos">
                                        <strong>Terrenos de 90 m2 <br> Precios</strong>
                                    </p>
                                    <p class="precios">
                                        1 mes - $270,000 <br>
                                        3 meses - $285,000 <br>
                                        6 meses - 300,000 
                                    </p>
                                    <p class="cambios">Los precios están sujetos a cambios.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about us end -->

        <!-- what i do start -->
        <section class="section bg-light" id="service">
            <div class="container">
                <div class="row">
                    <div class="col-12 mb-4">
                        <h2 class="title titulo"><span class="title-border mr-4 pr-3"></span> Proyectos <span class="title-border ml-4 pl-3"></span></h2>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="service-box rounded position-relative">
                            <div class="service-icon rounded"><i class="ri-lightbulb-flash-fill"></i></div>
                            <h5 class="font-size-17 font-weight-semibold mt-4 pt-2">Creative Designs</h5>
                            <p class="text-muted mt-3">
                                Web design is what creates the over look and feel when you’re using website. It’s the...
                            </p>
                            <a class="text-uppercase font-size-13 font-weight-medium text-muted pt-4" href="#">Read More</a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="service-box rounded position-relative active">
                            <div class="service-icon rounded"><i class="ri-window-2-fill"></i></div>
                            <h5 class="font-size-17 font-weight-semibold mt-4 pt-2">Web development</h5>
                            <p class="text-muted mt-3">
                                Web design is what creates the over look and feel when you’re using website. It’s the...
                            </p>
                            <a class="text-uppercase font-size-13 font-weight-medium text-muted pt-4" href="#">Read More</a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="service-box rounded position-relative">
                            <div class="service-icon rounded"><i class="ri-award-fill"></i></div>
                            <h5 class="font-size-17 font-weight-semibold mt-4 pt-2">Brand Identity</h5>
                            <p class="text-muted mt-3">
                                Web design is what creates the over look and feel when you’re using website. It’s the...
                            </p>
                            <a class="text-uppercase font-size-13 font-weight-medium text-muted pt-4" href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
        </section>
        <!-- what i do end -->

        <!-- creative works start -->
        <section class="section" id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-12 mb-4">
                        <h2 class="mb-0 title titulo">Amenidades <span class="title-border ml-4 pl-3"></span></h2>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <ul class="col container-filter categories-filter list-unstyled mt-4 pt-2" id="filter">
                        <li class="list-inline-item cat-list mr-sm-4 mr-2"><a class="categories active" data-filter="*">All</a></li>
                        <li class="list-inline-item cat-list mr-sm-4 mr-2"><a class="categories" data-filter=".web-design">Branding</a></li>
                        <li class="list-inline-item cat-list mr-sm-4 mr-2"><a class="categories" data-filter=".graphic-design">Designing</a></li>
                        <li class="list-inline-item cat-list mr-sm-4 mr-2"><a class="categories" data-filter=".ui-ux-design">Development</a></li>
                    </ul>
                </div>
                <!-- end row -->

                <!-- Gallery -->
                <div class="row projects-wrapper">
                    <div class="col-lg-4 col-md-6 mt-4 pt-2 web-design">
                        <div class="position-relative rounded overflow-hidden img-box">
                            <img class="img-fluid" src="images/work-1.jpg" alt="" />
                            <div class="item-caption">
                                <div class="text-center text-white work-content">
                                    <p class="font-size-13 text-uppercase font-weight-medium mb-2">Photoshop</p>
                                    <h4><a href="#" class="text-white">Cerative Design</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mt-4 pt-2 web-design graphic-design">
                        <div class="position-relative rounded overflow-hidden img-box">
                            <img class="img-fluid" src="images/work-2.jpg" alt="" />
                            <div class="item-caption">
                                <div class="text-center text-white work-content">
                                    <p class="font-size-13 text-uppercase font-weight-medium mb-2">Illustration</p>
                                    <h4><a href="#" class="text-white">Icons</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mt-4 pt-2 graphic-design ui-ux-design">
                        <div class="position-relative rounded overflow-hidden img-box">
                            <img class="img-fluid" src="images/work-3.jpg" alt="" />
                            <div class="item-caption">
                                <div class="text-center text-white work-content">
                                    <p class="font-size-13 text-uppercase font-weight-medium mb-2">Web Design</p>
                                    <h4><a href="#" class="text-white">Cerative Layout</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mt-4 pt-2 graphic-design ui-ux-design">
                        <div class="position-relative rounded overflow-hidden img-box">
                            <img class="img-fluid" src="images/work-4.jpg" alt="" />
                            <div class="item-caption">
                                <div class="text-center text-white work-content">
                                    <p class="font-size-13 text-uppercase font-weight-medium mb-2">Graphics</p>
                                    <h4> <a href="#" class="text-white">UI/UX Design</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mt-4 pt-2 ui-ux-design">
                        <div class="position-relative rounded overflow-hidden img-box">
                            <img class="img-fluid" src="images/work-5.jpg" alt="" />
                            <div class="item-caption">
                                <div class="text-center text-white work-content">
                                    <p class="font-size-13 text-uppercase font-weight-medium mb-2">Adobe XD</p>
                                    <h4> <a href="#" class="text-white">App Design</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
        </section>
        <!-- creative works end -->

        <!-- my blog -->
        <section class="section bg-light" id="blog">
            <div class="container">
                <div class="row">
                    <div class="col-12 mb-4">
                        <h2 class="title titulo">Ubicación<span class="title-border ml-4 pl-3"></span></h2>
                    </div>
                </div>
                <!-- end row -->
                <div class="row">
                    <div class="col-xl-5 col-md-6 col-12 mt-4 pt-2">
                        <div class="media blog-box">
                            <div class="bg-white rounded text-center date-box p-3 mr-4">
                                <h2 class="font-weight-lighter mb-0">25</h2>
                                <p class="font-size-15 text-muted text-uppercase font-weight-medium mb-0">June</p>
                            </div>
                            <div class="media-body">
                                <p class="font-size-13 text-muted text-uppercase font-weight-medium mb-2">branding</p>
                                <h4 class="font-size-18 mb-3"><a class="text-dark" href="#">The Unwritten Rules of Naming...</a></h4>
                                <p class="text-muted mt-2 mb-0">Nemo enim ipsam voluptatem quia voluptas quia voluptas magni dolores.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-5 offset-xl-2 col-md-6 col-12 mt-4 pt-2">
                        <div class="media blog-box active">
                            <div class="bg-white rounded text-center date-box p-3 mr-4">
                                <h2 class="font-weight-lighter mb-0">08</h2>
                                <p class="font-size-15 text-muted text-uppercase font-weight-medium mb-0">Aug</p>
                            </div>
                            <div class="media-body">
                                <p class="text-uppercase font-size-13 text-muted font-weight-medium mb-2">development</p>
                                <h4 class="font-size-18 mb-3"><a class="text-dark" href="#">The Unwritten Rules of Naming...</a></h4>
                                <p class="text-muted mt-2 mb-0">Nemo enim ipsam voluptatem quia voluptas quia voluptas magni dolores.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-5 col-md-6 col-12 mt-4 pt-2">
                        <div class="media blog-box">
                            <div class="bg-white rounded date-box text-center p-3 mr-4">
                                <h2 class="font-weight-lighter mb-0">05</h2>
                                <p class="font-size-15 text-muted text-uppercase font-weight-medium mb-0">May</p>
                            </div>
                            <div class="media-body">
                                <p class="text-uppercase font-size-13 text-muted font-weight-medium mb-2">business</p>
                                <h4 class="font-size-18 mb-3"><a class="text-dark" href="#">The Unwritten Rules of Naming...</a></h4>
                                <p class="text-muted mt-2 mb-0">Nemo enim ipsam voluptatem quia voluptas quia voluptas magni dolores.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-5 offset-xl-2 col-md-6 col-12 mt-4 pt-2">
                        <div class="media blog-box">
                            <div class="bg-white rounded date-box text-center p-3 mr-4">
                                <h2 class="font-weight-lighter mb-0">03</h2>
                                <p class="font-size-15 text-muted text-uppercase font-weight-medium mb-0">jun</p>
                            </div>
                            <div class="media-body">
                                <p class="font-size-13 text-muted text-uppercase font-weight-medium mb-2">branding</p>
                                <h4 class="font-size-18 mb-3"><a class="text-dark" href="#">The Unwritten Rules of Naming...</a></h4>
                                <p class="text-muted mt-2 mb-0">Nemo enim ipsam voluptatem quia voluptas quia voluptas magni dolores.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
        </section>
        <!-- my blog end -->
        <!-- parallax -->
        <section class="section parallax mt-5" id="parallax1">
            <div class="bg-overlay-2"></div>
            <div class="container text-center">
                <h2>¿Por qué invertir en Galicia Residencial?</h2>
                <p><h6>Plusvalía - Ubicación Estratégica - Amenidades - Crecimiento de la Región.</h6></p>
            </div>
        </section>
<?php
require_once("components/contacto.php");
require_once("components/footer.php");
require_once("components/scripts.php");
?>