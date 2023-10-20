<!-- Begin Page Content -->
<div class="container-fluid">
    <?php if ($msg) { ?>
        <div class="alert alert-success text-center" role="alert">
            <h4><?= $msg ?></h4>
        </div>
    <?php } ?>
    <div class="row">
        <div class="col-lg-3 p-3">
            <a class="btn btn-success btn-block" href="<?= base_url('Admin/new') ?>"><i class="fas fa fa-plus"></i> Crear nuevo Paciente</a>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Información general del paciente</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Sexo</th>
                            <th>Edad</th>
                            <th>Raza</th>
                            <th>Tamaño</th>
                            <th>Peso / Kg</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Sexo</th>
                            <th>Edad</th>
                            <th>Raza</th>
                            <th>Tamaño</th>
                            <th>Peso / Kg</th>
                            <th>Acciones</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php if ($paciente) { ?>
                            <?php foreach ($paciente as $p) { ?>
                                <tr>
                                    <td><?= $p->idpaciente ?></td>
                                    <td><?= $p->nombre_canino ?></td>
                                    <td><?= $p->sexo_canino ?></td>
                                    <td><?= $p->edad_canino ?></td>
                                    <td><?= $p->raza_canino ?></td>
                                    <td><?= $p->tamano_canino ?></td>
                                    <td><?= $p->peso_canino ?></td>
                                    <td class="text-center">
                                        <a href="<?= base_url() ?>Admin/view/<?= $p->idpaciente ?>" class="btn btn-primary btn-sm">
                                            <span class="text">Ver</span>
                                        </a>
                                      <!--   <a href="<?= base_url() ?>Admin/edit/<?= $p->idpaciente ?>" class="btn btn-success btn-sm">
                                            <span class="text">Editar</span>
                                        </a>
                                        <a href="#" class="btn btn-danger btn-sm">
                                            <span class="text">Eliminar</span>
                                        </a> -->
                                        <a href="<?= base_url() ?>Admin/notification/<?= $p->idpaciente ?>" class="btn btn-warning btn-sm">
                                            <span class="text">Notificaciones</span>
                                        </a>
                                        <a href="<?= base_url() ?>Admin/historial/<?= $p->idpaciente ?>" class="btn btn-info btn-sm">
                                            <span class="text">Historial</span>
                                        </a>
                                    </td>
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