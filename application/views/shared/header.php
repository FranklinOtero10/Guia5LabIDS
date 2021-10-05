<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title ?></title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.min.css">
</head>

<body>
  <script src="<?php echo base_url('js/bootstrap.bundle.min.js'); ?>"></script>
  <script src="<?php echo base_url(); ?>js/jquery-3.4.1.min.js"></script>
  <script src="<?php echo base_url(); ?>js/ajax.js"></script>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">USO</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?= site_url('estudiantesController') ?>">Estudiantes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= site_url('carrerasController') ?>">Carreras</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= site_url('MateriasController') ?>">Materias</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= site_url('profesoresController') ?>">Profesores</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= site_url('GruposController') ?>">Grupos</a>
        </li>
      </ul>
    </div>
  </nav>