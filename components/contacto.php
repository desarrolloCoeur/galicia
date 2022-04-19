<!-- contact us start -->
<section class="section" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-12 mb-4">
                        <h2 class="mb-0 title titulo"><span class="title-border mr-4 pr-3"></span>Contáctanos<span class="title-border ml-4 pl-3"></span></h2>
                    </div>
                </div>
                <!-- end row -->
                <div class="row">
                    <div class="col-12 mt-4 pt-2">
                        <form method="post" name="myForm" onsubmit="return validateForm()">
                            <p id="error-msg"></p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-4">
                                        <input type="text" class="form-control" placeholder="NOMBRE" id="name" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-4">
                                        <input type="email" class="form-control" placeholder="CORREO" id="email" />
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group mb-4">
                                        <input type="text" class="form-control" placeholder="ASUNTO"  id="subject"/>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group mb-4">
                                        <textarea class="form-control" placeholder="MENSAJE" rows="5" id="comments"></textarea>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                            <input type="submit" id="submit" name="send" class="btn btn-primary" value="ENVIAR MENSAJE" />
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact us end -->