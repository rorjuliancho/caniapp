 <!-- Begin Page Content -->
 <div class="container-fluid">
     <div class="card">
         <div class="row">
             <div class="col-lg-6">
                 <h2>Registrar nuevo paciente</h2>
             </div>
         </div>

         <div class="card-body">
             <form action="">
                 <form>
                     <div class="form-row">
                         <div class="form-group col-md-6">
                             <label for="inputEmail4">Nombre del canino</label>
                             <input type="text" class="form-control" id="inputEmail4" placeholder="Rex">
                         </div>
                         <div class="form-group col-md-6">
                             <label for="inputPassword4">Sexo</label>
                             <select class="form-control">
                                 <option value="">Seleccionar</option>
                                 <option value="">Hembra</option>
                                 <option value="">Macho</option>
                             </select>
                         </div>
                     </div>


                     <div class="form-row">
                         <div class="form-group col-md-6">
                             <label for="">Edad</label>
                             <input type="text" class="form-control" id="" placeholder="3 meses / años">
                         </div>
                         <div class="form-group col-md-6">
                             <label for="">Raza</label>
                             <input type="text" class="form-control" id="" placeholder="Pastor Aleman">
                         </div>
                     </div>

                     <div class="form-row">
                         <div class="form-group col-md-6">
                             <label for="">Tamaño</label>
                             <select class="form-control">
                                 <option value="">Seleccionar</option>
                                 <option value="">Pequeño</option>
                                 <option value="">Mediano</option>
                                 <option value="">Grande</option>
                             </select>
                         </div>
                         <div class="form-group col-md-6">
                             <label for="">Peso Kg</label>
                             <input type="text" class="form-control" id="" placeholder="28">
                         </div>
                     </div>
                     <hr>
                     <div class="row">
                         <div class="col-lg-6">
                             <h2>Medidas zoométricas</h2>
                         </div>
                         <div class="col-lg-6 text-right">
                             <a class="btn btn-primary " href="<?= base_url('Admin/medidas') ?>">¿Cómo Medir?</a>
                         </div>
                     </div>
                     <div class="form-row">
                         <div class="form-group col-md-4">
                             <label for="">Ancho de la Cadera (cm)</label>
                             <input type="text" class="form-control" id="" placeholder="20">
                         </div>
                         <div class="form-group col-md-4">
                             <label for="">Altura del Fémur al suelo (cm)</label>
                             <input type="text" class="form-control" id="" placeholder="10">
                         </div>
                         <div class="form-group col-md-4">
                             <label for="">Altura de la ingle hasta el suelo (cm)</label>
                             <input type="text" class="form-control" id="" placeholder="20">
                         </div>
                     </div>


                     <div class="form-row">
                         <div class="form-group col-md-4">
                             <label for="">Longitud del hombro hasta la cabeza del hombro (cm)</label>
                             <input type="text" class="form-control" id="" placeholder="20">
                         </div>
                         <div class="form-group col-md-4">
                             <label for="">Circunferencia del pecho (cm)</label>
                             <input type="text" class="form-control" id="" placeholder="10">
                         </div>
                         <div class="form-group col-md-4">
                             <label for="">Circunferencia del Cuello (cm)</label>
                             <input type="text" class="form-control" id="" placeholder="20">
                         </div>
                     </div>
                     <hr>
                     <div class="form-row">
                         <div class="form-group col-md-12">
                             <textarea class="form-control" name="" id="" cols="30" rows="3">Observaciones</textarea>
                         </div>
                     </div>

                     <div class="form-row">
                         <div class="form-group col-md-4">
                             <div class="input-group-prepend">
                                 <span class="input-group-text">Cargar Fotografía #1</span>
                             </div>
                             <div class="custom-file">
                                 <input type="file" class="custom-file-input" id="inputGroupFile01">
                                 <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                             </div>
                         </div>
                         <div class="form-group col-md-4">
                             <div class="input-group-prepend">
                                 <span class="input-group-text">Cargar Fotografía #2</span>
                             </div>
                             <div class="custom-file">
                                 <input type="file" class="custom-file-input" id="inputGroupFile01">
                                 <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                             </div>
                         </div>
                         <div class="form-group col-md-4">
                             <div class="input-group-prepend">
                                 <span class="input-group-text">Cargar Fotografía #3</span>
                             </div>
                             <div class="custom-file">
                                 <input type="file" class="custom-file-input" id="inputGroupFile01">
                                 <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                             </div>
                         </div>
                     </div>

                     <h3>Registro del Dueño de la Mascota</h3>

                     <div class="form-row">
                         <div class="form-group col-md-6">
                             <label for="inputEmail4">Nombre</label>
                             <input type="text" class="form-control" id="inputEmail4" placeholder="Daniela">
                         </div>
                         <div class="form-group col-md-6">
                             <label for="inputEmail4">Apellido</label>
                             <input type="text" class="form-control" id="inputEmail4" placeholder="Polanco">
                         </div>
                     </div>

                     <div class="form-row">
                         <div class="form-group col-md-6">
                             <label for="inputEmail4">Dirección</label>
                             <input type="text" class="form-control" id="inputEmail4" placeholder="Cll 76 # 80-40">
                         </div>
                         <div class="form-group col-md-6">
                             <label for="inputEmail4">Teléfono</label>
                             <input type="text" class="form-control" id="inputEmail4" placeholder="3201478520">
                         </div>
                     </div>

                     <div class="form-row">
                         <div class="form-group col-md-6">
                             <label for="inputEmail4">Email</label>
                             <input type="email" class="form-control" id="inputEmail4" placeholder="daniela@pruebas.com">
                         </div>
                         <div class="form-group col-md-6">
                             <label for="inputEmail4">Cédula</label>
                             <input type="text" class="form-control" id="inputEmail4" placeholder="10102580">
                         </div>
                     </div>

                     <center>
                         <button type="submit" class="btn btn-primary">Registrar</button>
                     </center>

                 </form>
             </form>
         </div>
     </div>
 </div>
 <!-- /.container-fluid -->