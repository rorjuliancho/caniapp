<?php if ($this->session->userdata('logueado') == TRUE) { ?>
    <div class="container">
        <div class="row">
            <div class="col-12 p-3">
                <img class="img-fluid" src="<?= base_url('public/img/nosotros.png') ?>" alt="Caniapp">
                <hr>
                <h2>Nosotros</h2>
                <p>
                    Somos un equipo de ingenieras biomédicas en proceso de armonizar y mejorar la calidad de vida de los caninos, especialmente aquellos que padecen de condiciones como la hernia discal. Nuestro principal enfoque se centra en los Pastor Alemán, una raza altamente susceptible a este tipo de afecciones. 
                    Con el avance de la tecnología, hemos reconocido que hay una oportunidad significativa de utilizar el software para asistir en el diseño de órtesis de cadera, proporcionando soluciones a medida que son tanto efectivas como cómodas para nuestros amigos caninos. 
                    Nuestra misión es combinar nuestra experiencia técnica y clínica para desarrollar herramientas que permitan a los veterinarios y a los propietarios de mascotas tener acceso a soluciones personalizadas que puedan mejorar significativamente la movilidad y el bienestar de los perros afectados.
                    Creemos que, con la combinación adecuada de tecnología y cuidado, podemos hacer una diferencia significativa en la vida de estos animales, permitiéndoles disfrutar de una vida plena y activa, independientemente de los desafíos de salud que puedan enfrentar.
                </p>
            </div>
        </div>

    </div>
<?php } else { ?>
    <?php redirect('Login/logout'); ?>
<?php } ?>