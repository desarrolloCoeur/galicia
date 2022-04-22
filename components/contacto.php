<?php
$texto1 = "Contáctanos";
$texto2 = "NOMBRE";
$texto3 = "CORREO";
$texto4 = "ASUNTO";
$texto5 = "MENSAJE";
$texto6 = "ENVIAR MENSAJE";
?>

<!-- contact us start -->
<section class="section" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-12 mb-4" data-aos="fade-up">
                        <h2 class="mb-0 title titulo"><span class="title-border mr-4 pr-3"></span><?php echo $texto1; ?><span class="title-border ml-4 pl-3"></span></h2>
                    </div>
                </div>
                <!-- end row -->
                <div class="row" data-aos="fade-up">
                    <div class="col-12 mt-4 pt-2">
                        <form method="post" name="myForm" onsubmit="return validateForm()">
                            <p id="error-msg"></p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-4">
                                        <input type="text" class="form-control" placeholder=<?php echo $texto2; ?> id="name" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-4">
                                        <input type="email" class="form-control" placeholder=<?php echo $texto3; ?> id="email" />
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group mb-4">
                                        <input type="text" class="form-control" placeholder=<?php echo $texto4; ?>  id="subject"/>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group mb-4">
                                        <textarea class="form-control" placeholder=<?php echo $texto5; ?> rows="5" id="comments"></textarea>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                            <input type="submit" id="submit" name="send" class="btn btn-primary" data-aos="fade-right" value="<?php echo $texto6; ?>" />
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact us end -->