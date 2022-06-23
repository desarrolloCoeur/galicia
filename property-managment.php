<!DOCTYPE html>
<html lang="en">

<head>
<?php require_once 'components/common-head.comp.php';?>
</head>

<body>
    <!-- HEADER -->
    <header>
       <?php require_once 'components/nav.comp.php';?>
        <!-- BREADCRUMB -->
        <div class="bg-theme-overlay property-managment"></div>
        <!-- END BREADCRUMB -->
    </header>
    <div class="clearfix"></div>
    <div class="separador-sm"></div>


    <!-- ABOUT -->
    <section class="home__about bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="title__leading">
                        <h2 class="text-capitalize">property management</h2>
                        <p>
                            For 15 years we have performed Property Management and Consulting in Punta Mita, always seeking to adapt to the needs of clients in order to offer outstanding services.                            
                        </p>
                        <p>
                            Among the services we offer are:
                        </p>
                        <ul>
                            <li>Property Maintenance.</li>
                            <li>Daily cleaning.</li>
                            <li>Payments and property management.</li>
                            <li>Cleaning supplies based on requirements.</li>
                            <li>Weekly inspection of the property with preventive maintenance</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about__image">
                        <div class="about__image-top">
                            <div class="about__image-top-hover">
                                <img src="./assets/img/about-us.jpg" alt="" class="img-fluid">
                            </div>

                        </div>
                        <div class="about__image-bottom">
                            <div class="about__image-bottom-hover">
                                <img src="./assets/img/LG01/3.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END ABOUT -->

    <section class="bg-red">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h5>If you want to register your property with us, leave us your information below.</h5>
                </div>
                <div class="col-sm-12 col-lg-6 col-md-8">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group form-group-name">
                                <label>Your name <span class="required"></span></label>
                                <input type="text" class="form-control" name="name" required="required">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-name">
                                <label>Your email <span class="required"></span></label>
                                <input type="email" class="form-control" name="email" required="required">
    
                            </div>
                        </div>
    
                        <div class="col-md-6">
                            <div class="form-group form-group-name">
                                <label>Your phone number</label>
                                <input type="phone" class="form-control" name="phone">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-name">
                                <label for="location">Location</label>
                                <select name="location" id="location" class="form-control" required="required"> 
                                    <option>Select One</option>
                                    <option value="punta_mita">Punta Mita</option>
                                    <option value="nuevo_vallarta">Nuevo Vallarta</option>
                                    <option value="puerto_vallarta">Puerto Vallarta</option>
                                    <option value="bucerias">Bucerias</option>
                                    <option value="conchas_chinas">Conchas Chinas</option>
                                    <option value="los_veneros">Los Veneros</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Your message </label>
                                <textarea class="form-control" rows="16" name="message"></textarea>
                            </div>
                            <div class="form-group float-right mb-0">
                                <button type="submit" class="btn btn-primary btn-contact">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer  -->
    <footer>
        <div class="topbar d-none d-sm-block">
            <div class="container ">
                <div class="row justify-content-center">
                    <div class="col-sm-12 col-md-9 pt-3">
                        <div class="topbar-text text-center text-white">
                            &copy; 2021 all rights reserverd - Bahia Connect, Property Managment &amp; Rentals.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer  -->





   <!-- SCROLL TO TOP -->
   <a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up"></i></a>
   <!-- END SCROLL TO TOP -->
   <script src="./assets/js/all.min.js"></script>
</body>

</html>