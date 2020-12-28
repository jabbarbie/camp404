<?php $this->extend('layout/template')?>

<?php $this->section('content')?>

<div class="bg-light p-5 text-center">
  <h1>Portal Informasi</h1>
  <p>Selamat datang di portal informasi siswa 404</p>

  <a class="btn btn-dark" href="<?= base_url('info-kegiatan') ?>">Info Kegiatan</a>
  <a class="btn btn-primary" href="<?= base_url('data-siswa') ?>">Data Siswa</a>
</div>

<?php $this->endSection()?>
