<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <title> <?php $judul ?> </title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="<?= base_url(); ?>">Pelatihan</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?= base_url(); ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>post">Post</a>
          </li>

        </ul>

        <form action="<?= base_url(); ?>post" method="POST" class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" name="keyword" placeholder="Cari judul..." aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit">Search</button>
        </form>
        <?php if (logged_in()) : ?>
    <a class="btn btn-outline-secondary my-2 my-sm-0 mx-3" href="<?= base_url('auth/'); ?>logout ">Logout</a><?php else : ?>
    <a class="btn btn-warning my-2 my-sm-0 mx-3" href="<?= base_url('auth'); ?>">Login</a><?php endif; ?>
      </div>
    </div>


  </nav>