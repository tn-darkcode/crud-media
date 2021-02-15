<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <title>crud-media</title>
</head>
<body>

<div class="container mt-5">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo base_url(); ?>">media</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url(); ?>">home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url(); ?> about">about</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url(); ?> posts">blogs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url(); ?> posts/create">create post</a>
        </li>
      </ul>
    </div>
  </div>
</nav>