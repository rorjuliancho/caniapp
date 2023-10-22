<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Resultado Encuesta</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre Responsable</th>
                            <th>Nombre Mascota</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>

                    <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Nombre Responsable</th>
                            <th>Nombre Mascota</th>
                            <th>Acciones</th>
                        </tr>
                    </tfoot>
                  
                    <tbody>
                        <?php if ($encuesta) { ?>
                            <?php foreach ($encuesta as $p) { ?>
                                <tr>
                                    <td><?= $p->id_padre ?></td>
                                    <td><?= $p->nombre ?></td>
                                    <td><?= $p->nombre_canino ?></td>
                                    <td class="text-center">
                                        <a href="<?= base_url() ?>Admin/viewEncuesta/<?= $p->id_padre ?>" class="btn btn-primary btn-sm">
                                            <span class="text">Ver Resultados</span>
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