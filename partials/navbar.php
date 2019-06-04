<?php
  $username = "Nombre Apellido";
 ?>
  <body>
    <header class="App_header">
      <div class="image_container">
        <img src="img/profile_pic.jpg" alt="Foto perfil">
      </div>
      <div class="user_info">
          BIENVENID@</br> <?= $username ?>
      </div>
      <ul class="menu_access">
        <li><a href="friends.php">AMIGOS</a></li>
        <li><a href="profile.php">PERFIL</a></li>
        <li><a href="home.php">HOME</a></li>
      </ul>
      <div class="config_icon">
        <i class="fas fa-cog"></i>
      </div>
    </header>
