<?php
  $username = "Marina Zambrano";
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $section?></title>
  </head>
  <body>
    <header class="App_header">
      <div class="image_container">
        <img src="img/profile_pic.jpg" alt="Foto perfil">
      </div>
      <div class="user_info">
          BIENVENID@</br> <?= $username ?>
      </div>
      <div class="config_icon">
        <i class="fas fa-cog"></i>
      </div>
    </header>
