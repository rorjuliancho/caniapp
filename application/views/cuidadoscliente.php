<?php if ($this->session->userdata('logueado') == TRUE) { ?>
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="card mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Cuidados</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <iframe width="100%" height="600" src="https://www.youtube.com/embed/wiU2xk4-Ugo?si=z6bAI1WclquXNAU0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 my-auto">
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title"><i class="fas fa fa-paw"></i> Cuidado 1</h5>
                                <p class="card-text">Limpia tus patitas con agua y shampoo y asi todo tu cuerpito si tienes heridas desinfectalas.</p>
                            </div>
                        </div>

                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title"><i class="fas fa fa-paw"></i> Cuidado 2</h5>
                                <p class="card-text">Es normal que tu no sientas cuando quieras hacer tus esse por esta razón tus papitos te pondrán pañal y estaran pendiente de tener una buena liempieza.</p>
                            </div>
                        </div>

                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title"><i class="fas fa fa-paw"></i> Cuidado 3</h5>
                                <p class="card-text">Nosotros sabemos que la silla de ruedas tambien te cansa por esto tus papitos estaran muy pendientes para ayudarte a subir y bajar de ella.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
<?php } else { ?>
    <?php redirect('Login/logout'); ?>
<?php } ?>