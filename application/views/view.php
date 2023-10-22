<?php if ($this->session->userdata('logueado') == TRUE) { ?>
    <div class="container-fluid">
        <?php if ($informacion) { ?>
            <?php foreach ($informacion as $i) { ?>
                <div class="card mb-4">
                    <div class="card-header py-3">
                        <strong>Inforamción del Paciente</strong>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-3 p-3">
                                <p>Nombre Paciente: <strong><?= $i->nombre_canino ?></strong></p>
                            </div>
                            <div class="col-lg-3 p-3">
                                <p>Sexo: <strong><?= $i->sexo_canino ?></strong></p>
                            </div>
                            <div class="col-lg-3 p-3">
                                <p>Edad: <strong><?= $i->edad_canino ?></strong></p>
                            </div>
                            <div class="col-lg-3 p-3">
                                <p>Raza: <strong><?= $i->raza_canino ?></strong></p>
                            </div>
                        </div>

                        <hr>
                        <div class="row">
                            <div class="col-lg-3 p-3">
                                <p>Tamaño Paciente: <strong><?= $i->tamano_canino ?></strong></p>
                            </div>
                            <div class="col-lg-3 p-3">
                                <p>Peso / Kg: <strong><?= $i->peso_canino ?></strong></p>
                            </div>
                            <div class="col-lg-3 p-3">
                                <p>Ancho Cadera / cm: <strong><?= $i->ancho_cadera ?></strong></p>
                            </div>
                            <div class="col-lg-3 p-3">
                                <p>Altura del Femur / cm: <strong><?= $i->altura_femur_suelo ?></strong></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-3 p-3">
                                <p>Altura Ingle / cm: <strong><?= $i->altura_ingle_suelo ?></strong></p>
                            </div>
                            <div class="col-lg-3 p-3">
                                <p>Longitud Hombro a Hombro: <strong><?= $i->logintud_hombro_hombro ?></strong></p>
                            </div>
                            <div class="col-lg-3 p-3">
                                <p>circunferencia pecho / cm: <strong><?= $i->circunferencia_pecho ?></strong></p>
                            </div>
                            <div class="col-lg-3 p-3">
                                <p>Circunferencia Cuello / cm: <strong><?= $i->circunferencia_cuello ?></strong></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-12 p-3">
                                <p>Observaciones: <strong><?= $i->observaciones ?></strong></p>
                            </div>

                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-4 p-3">

                                <?php if ($i->img_uno) { ?>
                                    <p>Imagen 1</p><img src="<?= base_url() ?>paciente/<?= $i->img_uno ?>" class="img-fluid" alt="caniaap">
                                <?php } else { ?>
                                    <p>Imagen 1</p>
                                    <p><strong>Imagen no cargada</strong></p>
                                <?php } ?>

                            </div>
                            <div class="col-lg-4 p-3">
                                <?php if ($i->img_dos) { ?>
                                    <p>Imagen 2</p><img src="<?= base_url() ?>paciente/<?= $i->img_dos ?>" class="img-fluid" alt="caniaap">
                                <?php } else { ?>
                                    <p>Imagen 2</p>
                                    <p><strong>Imagen no cargada</strong></p>
                                <?php } ?>


                            </div>
                            <div class="col-lg-4 p-3">
                                <?php if ($i->img_tres) { ?>
                                    <p>Imagen 3</p><img src="<?= base_url() ?>paciente/<?= $i->img_tres ?>" class="img-fluid" alt="caniaap">
                                <?php } else { ?>
                                    <p>Imagen 3</p>
                                    <p><strong>Imagen no cargada</strong></p>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="card mt-3">
                    <div class="card-header py-3">
                        <strong>Información del dueño de la mascota</strong>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-3">
                                <p>Nombre: <strong><?= $i->nombre ?></strong></p>
                            </div>
                            <div class="col-lg-3">
                                <p>apellido: <strong><?= $i->apellido ?></strong></p>
                            </div>
                            <div class="col-lg-3">
                                <p>Dirección: <strong><?= $i->direccion ?></strong></p>
                            </div>
                            <div class="col-lg-3">
                                <p>Teléfono: <strong><?= $i->telefono ?></strong></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-3">
                                <p>email: <strong><?= $i->email ?></strong></p>
                            </div>
                            <div class="col-lg-3">
                                <p>cedula: <strong><?= $i->cedula ?></strong></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-header py-3">
                        <strong>Historia Clínica</strong>
                    </div>
                    <div class="card-body">
                        <?php if ($historial) { ?>
                            <?php foreach ($historial as $h) { ?>
                                <div class="row">
                                    <div class="col-lg-8">
                                        <p>Historial : <?= $h->observaciones ?></p>
                                    </div>
                                    <div class="col-lg-4">
                                        <p>Fecha : <?= $h->fecha_visita ?></p>
                                    </div>
                                </div>
                                <hr>
                            <?php } ?>
                        <?php } ?>
                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-header py-3">
                        <strong>Notificaciones</strong>
                    </div>
                    <div class="card-body">
                        <?php if ($notificacion) { ?>
                            <?php foreach ($notificacion as $n) { ?>
                                <div class="row">
                                    <div class="col-lg-8">
                                        <p>Notificación : <?= $n->notificacion ?></p>
                                    </div>
                                </div>
                                <hr>
                            <?php } ?>
                        <?php } ?>
                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-header py-3">
                        <strong>Prótesis recomendada</strong>
                    </div>
                    <div class="card-body">
                        <!-- prototipo pequeño -->
                        <?php if ($protesis == 'pequeño') { ?>
                            <div class="row">
                                <div class="col-lg-4">
                                    <img src="<?= base_url('public/img/protesis/p1.png') ?>" alt="Caniaap" class="img-fluid">
                                </div>
                                <div class="col-lg-4">
                                    <img src="<?= base_url('public/img/protesis/p2.png') ?>" alt="Caniaap" class="img-fluid">
                                </div>
                                <div class="col-lg-4">
                                    <img src="<?= base_url('public/img/protesis/p3.png') ?>" alt="Caniaap" class="img-fluid">
                                </div>
                            </div>
                            <!-- prototipo mediano -->
                        <?php } else if ($protesis == 'mediano') { ?>
                            <div class="row">
                                <div class="col-lg-4">
                                    <img src="<?= base_url('public/img/protesis/m1.png') ?>" alt="Caniaap" class="img-fluid">
                                </div>
                                <div class="col-lg-4">
                                    <img src="<?= base_url('public/img/protesis/m2.png') ?>" alt="Caniaap" class="img-fluid">
                                </div>
                                <div class="col-lg-4">
                                    <img src="<?= base_url('public/img/protesis/m3.png') ?>" alt="Caniaap" class="img-fluid">
                                </div>
                            </div>

                            <!-- prototipo grande -->
                        <?php } else if (
                            $protesis == 'grande'
                        ) { ?>
                            <div class="row">
                                <div class="col-lg-4">
                                    <img src="<?= base_url('public/img/protesis/g1.png') ?>" alt="Caniaap" class="img-fluid">
                                </div>
                                <div class="col-lg-4">
                                    <img src="<?= base_url('public/img/protesis/g2.png') ?>" alt="Caniaap" class="img-fluid">
                                </div>
                                <div class="col-lg-4">
                                    <img src="<?= base_url('public/img/protesis/g3.png') ?>" alt="Caniaap" class="img-fluid">
                                </div>
                            </div>
                        <?php } else { ?>
                            <div class="row">
                                <div class="col-lg-12">
                                    <h5>Por favor válida los datos ingresados para poderte recomendar una prótesis</h5>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
        <?php } ?>
    </div>
<?php } else { ?>
    <?php redirect('Login/logout'); ?>
<?php } ?>