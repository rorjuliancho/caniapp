<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
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
                            <th>Peso</th>
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
                            <th>Peso</th>
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
                                    <td><?= $p->tamaño_canino ?></td>
                                    <td><?= $p->peso_canino ?></td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-primary btn-md">
                                            <span class="text">Ver</span>
                                        </a>
                                        <a href="#" class="btn btn-success btn-md">
                                            <span class="text">Editar</span>
                                        </a>
                                        <a href="#" class="btn btn-danger btn-md">
                                            <span class="text">Eliminar</span>
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