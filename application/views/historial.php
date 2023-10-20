<?php if ($this->session->userdata('logueado') == TRUE) { ?>
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="card mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Historia Clínica</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <form action="<?= base_url('Admin/guardar_historia') ?>" method="POST" enctype="multipart/form-data">
                            <input type="text" hidden name="idPaciente" value="<?= $idPaciente ?>">
                            <div class="form-row">
                                <div class="form-group col-md-8">
                                    <label for="inputEmail4">Información de la historia</label>
                                    <textarea type="text" name="historia" class="form-control" required></textarea>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputEmail4">Fecha de la historia</label>
                                    <input type="date" name="fecha" class="form-control" required></textarea>
                                </div>
                            </div>
                            <center>
                                <button type="submit" class="btn btn-primary">Crear</button>
                            </center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
<?php } else { ?>
    <?php redirect('Login/logout'); ?>
<?php } ?>