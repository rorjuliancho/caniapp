<?php if ($this->session->userdata('logueado') == TRUE) { ?>
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="card mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Registrar Notificacion</h6>
            </div>
            <div class="card-body">
                <form action="<?= base_url('Admin/guardar_notificacion') ?>" method="POST" enctype="multipart/form-data">
                    <form>
                        <input type="text" hidden name="idPaciente" value=<?= $idPaciente ?>>
                        <div class="form-row">
                            <div class="form-group col-md-12">

                                <label for="inputEmail4">Notificacion</label>
                                <textarea type="text" name="notificacion" class="form-control" id="" required></textarea>
                            </div>
                        </div>
                        <center>
                            <button type="submit" class="btn btn-primary">Registrar</button>
                        </center>
                    </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
<?php } else { ?>
    <?php redirect('Login/logout'); ?>
<?php } ?>