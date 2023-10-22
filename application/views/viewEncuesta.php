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
                            <th>Pregunta</th>
                            <th>Respuesta</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php if ($viewEncuesta) { ?>
                            <?php foreach ($viewEncuesta as $p) { ?>
                                <tr>
                                    <td><?= $p->idencuesta ?></td>
                                    <td><?= $p->pregunta ?></td>
                                    <td><?= $p->respuesta ?></td>
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