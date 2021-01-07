<?php $this->extend('layout/template') ?>
<?php $this->section('content') ?>


<?php if (session()->get('role') === 'admin'): ?>
<!--  -->

<div class="rrr d-flex justify-content-center">
<div class="col-6">
	

<div class="container mt-5">
	<div class="rrr">
		<div class="">
			<h3 class="text-center">Input Data Siswa</h3>
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
	<form action="<?= base_url('data-siswa/update/'.$siswa['id'])?>" method='post' autocomplete="on">
		<?= csrf_field() ?>
		<input type="hidden" name="_method" value="PUT">

		<!-- Nama -->
		<div class="mb-3">
			<label class="form-label">Nis</label>			
			<input  type="text" class="form-control  <?php echo $validation->hasError('nis')?'is-invalid':''; ?> " name="nis" value="<?= old('nis')??$siswa['nis'] ?>" />
			<div class="form-text invalid-feedback">
					<?= $validation->getError('nis') ?>	
				</div>

		</div>

	<!-- Email	 -->
		<div class="mb-3">
			<label class="form-label">Nama Siswa</label>
			
				<input  type="text" class="form-control  <?php echo $validation->hasError('nama')?'is-invalid':''; ?> " name="nama" value="<?= old('nama')??$siswa['nama'] ?>" autocomplete="off" />
				<div class="form-text invalid-feedback">
					<?= $validation->getError('nama') ?>	
				</div>

		</div>
	<!-- Password -->
		<div class="mb-3">
			<label class="form-label">Tanggal Lahir</label>
			
				<input  type="date" class="form-control  <?php echo $validation->hasError('tgl_lahir')?'is-invalid':''; ?> " name="tgl_lahir" value="<?= old('tgl_lahir')??$siswa['tgl_lahir'] ?>" />
				<div class="form-text invalid-feedback">
					<?= $validation->getError('tgl_lahir') ?>	
				</div>				
		</div>		

		<!-- Submit -->
		<div class="mb-3">
				<button class="btn btn-primary" type="submit">
					Simpan
				</button>
		</div>

	</form>
</div>
<!--  -->
<?php else: ?>
<div class="alert alert-danger">
	<h1>Tidak memiliki akses</h1>
</div>


<?php endif; ?>

<?php $this->endSection()?>
