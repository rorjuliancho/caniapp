<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Encuesta</h6>
        </div>
        <div class="card-body">
            <form action="<?= base_url('Cliente/guardar_encuesta') ?>" method="POST" enctype="multipart/form-data">
                <div class="form-row">
                    <?php $i = 1; ?>
                    <?php foreach ($encuesta as $e) { ?>
                        <div class="form-group col-md-8">
                            <label for="inputEmail4">pregunta <?= $i ?></label>
                            <p><?= $e->pregunta ?></p>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputPassword4">Respuesta <?= $i ?></label>
                            <select class="form-control" name="respuesta<?= $i ?>" required>
                                <option value="">Seleccionar</option>
                                <option value="si">si</option>
                                <option value="no">no</option>
                            </select>
                        </div>
                        <hr>
                        <?php $i++; ?>
                    <?php } ?>
                </div>
                <center>
                    <button type='submit' class='btn btn-primary'>Enviar</button>
                </center>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->