<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>
<div class="rrr d-flex justify-content-center">
<div class="col-4">

<div class="container mt-5">
	<div class="row">
		<div class="col-lg-6 mx-auto">
			<h3 class="text-center">Login</h3>
		</div>
	</div>

	<?php if (session()->getFlashdata('login_failed')):?>
		<div class="">
			<div class="alert alert-danger mx-auto">
				<?php echo session()->getFlashdata('login_failed') ?>
			</div>
		</div>
	<?php endif; ?>

	<div class="mt-1">
		<div class="mx-auto">
			<form method="post" action="<?= base_url('login/proses-login')?>">
				<div class="mb-3">
					<label class="form-label">Email</label>
				
					<input  type="email" class="form-control <?php echo ($validation->hasError('email'))?'is-invalid':'' ?>" name="email" value="<?= old('email') ?>" autocomplete="off" />

					<div class="form-text invalid-feedback">
						<?= $validation->getError('email') ?>	
					</div>

				</div>

				<div class="mb-3">
					<label class="form-label">Password</label>
				
					<input  type="text" class="form-control <?php echo ($validation->hasError('email'))?'is-invalid':'' ?>" name="password" value="<?= old('password') ?>" autocomplete="off" />

					<div class="form-text invalid-feedback">
						<?= $validation->getError('password') ?>	
					</div>

				</div>
				<div class="mb-3">
				
					<button class="btn btn-primary" type="submit">
						Login
					</button>

				</div>

			</form>
		</div>
	</div>
</div>


</div>
</div>



<?= $this->endSection() ?>
