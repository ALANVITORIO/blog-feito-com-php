<?php
include_once('helpers/url.php');
include_once('data/posts.php');
include_once('data/categories.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>blog avitorio</title>
  <link rel="stylesheet" href="<?= $BASE_URL ?>/css/style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" />

</head>

<body>
  <header>
    <a href="<?= $BASE_URL ?>" id="logo">
      <img src="<?= $BASE_URL ?>/img/logo.svg" alt="blogAv">
    </a>
    <nav>
      <ul id="navbar">
        <li><a href="<?= $BASE_URL ?>" class="nav-link">Home</a></li>
        <li> <a href="#" class="nav-link"> Categorias </a></li>
        <li> <a href="#" class="nav-link"> Sobre </a></li>
        <li><a href="<?= $BASE_URL ?> contato.php" class="nav-link">contato</a></li>
      </ul>
    </nav>
  </header>