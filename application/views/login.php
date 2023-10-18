<div class="container p-5">
	<!-- Outer Row -->
	<div class="row justify-content-center">
		<div class="col-xl-10 col-lg-12 col-md-9">

			<div class="card o-hidden border-0 shadow-lg my-5">
				<div class="card-body p-0">

					<div class="row">
						<div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
						<div class="col-lg-6">
							<div class="p-5">

								<div class="text-center">
									<h1 class="h4 text-gray-900 mb-4">Bienvenido a CaniApp</h1>
								</div>
								<?php if ($msg) { ?>
									<div class="alert alert-danger text-center" role="alert">
										<?= $msg ?>
									</div>
								<?php } ?>
								<form class="user p-4" action="<?= base_url('Login/singin') ?>" method="post">
									<div class="form-group">
										<input type="email" name="user" class="form-control form-control-user" placeholder="Email">
									</div>
									<div class="form-group">
										<input type="password" name="pass" class="form-control form-control-user" placeholder="Contraseña">
									</div>

									<button type="submit" class="btn btn-primary btn-user btn-block">
										Login
									</button>
								</form>
								<hr>
								<div class="text-center">
									<a class="small" href="#">olvide mi contraseña?</a>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

	</div>

</div>