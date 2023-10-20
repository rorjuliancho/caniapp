<?php if ($this->session->userdata('logueado') == TRUE) { ?>
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <form action="<?= base_url('Admin/imagenes') ?>" method="POST" enctype="multipart/form-data">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Cargar Fotografía #1</span>
                    </div>
                    <div class="">
                        <input type="file" name="cargaUno" class="">
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Cargar Fotografía #2</span>
                    </div>
                    <div class="">
                        <input type="file" name="evidenciados" class="">
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Cargar Fotografía #3</span>
                    </div>
                    <div class="">
                        <input type="file" name="fotografiatres" class="">

                    </div>
                </div>
            </div>
            <button type="submit">Enviar</button>
        </form>
    </div>
    <!-- /.container-fluid -->
<?php } else { ?>
    <?php redirect('Login/logout'); ?>
<?php } ?>