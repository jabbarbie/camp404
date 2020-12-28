<?php $this->extend('layout/template') ?>

<?php $this->section('content') ?>
<div class="rrr d-flex justify-content-center">
<div class="col-6">
	

<div class="container mt-5">
	<div class="rrr">
		<div class="">
			<h3 class="text-center">Form Registrasi</h3>
		</div>
	</div>
</div>

<?php if (session()->getFlashdata('berhasil')): ?>

	<div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
	<strong><?= session()->getFlashdata('berhasil')?></strong> 
	<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>
<?php endif; ?>


<!--  -->
<div class="rrr mt-3">
	<div class="">
		<form action="<?= base_url('registrasi/simpan-registrasi')?>" method='post' autocomplete="on">
			<?= csrf_field() ?>
			<!-- Nama -->
			<div class="mb-3">
				<label class="form-label">Nama</label>
				
				<input  type="text" class="form-control  <?php echo $validation->hasError('nama')?'is-invalid':''; ?> " name="nama" value="<?= old('nama') ?>" />

				<div class="form-text invalid-feedback">
					<?= $validation->getError('nama') ?>	
				</div>

			</div>

		<!-- Email	 -->
			<div class="mb-3">
				<label class="form-label">Email</label>
				
					<input  type="email" class="form-control <?php echo ($validation->hasError('email'))?'is-invalid':'' ?>" name="email" value="<?= old('email') ?>" autocomplete="off" />

					<div class="form-text invalid-feedback">
						<?= $validation->getError('email') ?>	
					</div>

			</div>
		<!-- Password -->
			<div class="mb-3">
				<label class="form-label">Password</label>
				
					<input  type="password" class="form-control <?php echo ($validation->hasError('password'))?'is-invalid':'' ?>" name="password" value="<?= old('password') ?>" />

					<div class="form-text invalid-feedback">
						<?= $validation->getError('password') ?>	
					</div>

			</div>		
		<!-- Konfirmasi Password -->
			<div class="mb-3">
				<label class="form-label">Konfirmasi Password</label>
				
					<input  type="konfirmasi_password" class="form-control <?php echo ($validation->hasError('konfirmasi_password'))?'is-invalid':'' ?>" name="konfirmasi_password" value="<?= old('konfirmasi_password') ?>" />

					<div class="form-text invalid-feedback">
						<?= $validation->getError('konfirmasi_password') ?>	
					</div>

			</div>

			<!-- Submit -->
			<div class="mb-3">
				
					<button class="btn btn-primary" type="submit">
						Register
					</button>

			</div>






		</form>
	</div>	
</div>
</div>
</div>

<?php $this->endSection() ?>

