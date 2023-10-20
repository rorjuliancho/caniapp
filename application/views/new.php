<?php if ($this->session->userdata('logueado') == TRUE) { ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="card mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Registrar nuevo Paciente</h6>
            </div>
            <div class="card-body">
                <form action="<?= base_url('Admin/guardar_informacion') ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Nombre del canino</label>
                            <input type="text" name="nombre_canino" class="form-control" id="inputEmail4" placeholder="Rex" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Sexo</label>
                            <select class="form-control" name="sexo" required>
                                <option value="">Seleccionar</option>
                                <option value="Hembra">Hembra</option>
                                <option value="Macho">Macho</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="">Edad</label>
                            <input type="text" class="form-control" name="edad" placeholder="3 meses / años" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Raza</label>
                            <input type="text" class="form-control" name="raza" placeholder="Pastor Aleman" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="">Tamaño/cm</label>
                            <input type="text" name="tamano" class="form-control" id="" placeholder="30" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Peso Kg</label>
                            <input type="text" name="peso" class="form-control" placeholder="28" required>
                        </div>
                    </div>
            </div>
        </div>
        <div class="card mt-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Medidas Zoometricas</h6>
                <a class="btn btn-primary " href="<?= base_url('Admin/medidas') ?>">¿Cómo Medir?</a>
            </div>
            <div class="card-body">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="">Ancho de la Cadera (cm)</label>
                        <input type="text" name="ancho_cadera" class="form-control" id="" placeholder="20" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Altura del Fémur al suelo (cm)</label>
                        <input type="text" name="altura_femur" class="form-control" id="" placeholder="10" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Altura de la ingle hasta el suelo (cm)</label>
                        <input type="text" name="altura_ingle" class="form-control" id="" placeholder="20" required>
                    </div>
                </div>


                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="">Longitud del hombro hasta la cabeza del hombro (cm)</label>
                        <input type="text" name="longitud_hombro" class="form-control" id="" placeholder="20" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Circunferencia del pecho (cm)</label>
                        <input type="text" name="circunferencia_pecho" class="form-control" id="" placeholder="10" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Circunferencia del Cuello (cm)</label>
                        <input type="text" name="circunferencia_cuello" class="form-control" id="" placeholder="20" required>
                    </div>
                </div>
                <hr>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <textarea class="form-control" name="observaciones" id="" cols="30" rows="3">Observaciones</textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Cargar Fotografía #1</span>
                        </div>
                        <div class="">
                            <input type="file" name="evidenciauno" class="">
                        </div>
                    </div>
                    <div class="form-group col-md-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Cargar Fotografía #2</span>
                        </div>
                        <div class="">
                            <input type="file" name="fotodos" class="">
                        </div>
                    </div>
                    <div class="form-group col-md-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Cargar Fotografía #3</span>
                        </div>
                        <div class="">
                            <input type="file" name="adjuntotres" class="">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mt-4 mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Registrar dueño de la mascota</h6>
            </div>
            <div class="card-body">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Nombre</label>
                        <input type="text" class="form-control" name="nombre_padre" placeholder="Daniela" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Apellido</label>
                        <input type="text" class="form-control" name="apellido_padre" placeholder="Polanco" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Dirección</label>
                        <input type="text" class="form-control" name="direccion" placeholder="Cll 76 # 80-40">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Teléfono</label>
                        <input type="text" class="form-control" name="telefono" placeholder="3201478520">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="daniela@pruebas.com">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Cédula</label>
                        <input type="text" class="form-control" name="cedula" placeholder="10102580">
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