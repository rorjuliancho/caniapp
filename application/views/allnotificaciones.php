<?php if ($this->session->userdata('logueado') == TRUE) { ?>
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="card mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Notificaciones</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Notificación</th>
                                <th>Dueño de la mascota</th>
                                <th>Paciente</th>
                                <th>Fecha Notificación</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Notificación</th>
                                <th>Dueño de la mascota</th>
                                <th>Paciente</th>
                                <th>Fecha Notificación</th>

                            </tr>
                        </tfoot>
                        <tbody>
                            <?php if ($allNotificacion) { ?>
                                <?php foreach ($allNotificacion as $p) { ?>
                                    <tr>
                                        <td><?= $p->idnotificaciones ?></td>
                                        <td><?= $p->notificacion ?></td>
                                        <td><?= $p->nombre ?> <?= $p->apellido ?></td>
                                        <td><?= $p->nombre_canino ?></td>
                                        <td><?= $p->fecha_notificacion ?></td>
                                    </tr>
                                <?php } ?>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
<?php } else { ?>
    <?php redirect('Login/logout'); ?>
<?php } ?>