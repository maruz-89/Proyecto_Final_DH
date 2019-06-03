<?php
$section="Friends";
$friendlist = [
  [
    "photo" => "profile_pic.jpg",
    "name" => "Marina Zambrano",
    "posts" => 12,
    "followers" => 5,
    "writings" => 2
  ],
  [
    "photo" => "profile_pic.jpg",
    "name" => "Fernanda Peralta",
    "posts" => 13,
    "followers" => 45,
    "writings" => 1
  ],
  [
    "photo" => "profile_pic.jpg",
    "name" => "Marina Zambrano",
    "posts" => 12,
    "followers" => 5,
    "writings" => 2
  ],
  [
    "photo" => "profile_pic.jpg",
    "name" => "Fernanda Peralta",
    "posts" => 13,
    "followers" => 45,
    "writings" => 1
  ],
];

 require_once("./partials/head.php");
 require_once("./partials/navbar.php");
 ?>

    <div class="friends_finder container">
      <h2 class="row col-md-auto">Escritores favoritos</h2>
      <!-- Search form -->
      <form class="form-inline md-form form-sm row">
        <input class="form-control form-control-sm auto col-10" type="text" placeholder="Busca un escritor">
        <i class="fas fa-search col-2" aria-hidden="true"></i>
      </form>
    </div>

    <div class="friends_list">
      <?php foreach ($friendlist as $friend): ?>
      <div class="friend_container">
        <div class="friend_photo">
           <img src="img/<?= $friend["photo"] ?>" alt="Foto perfil">
        </div>
        <div class="friend_name"><?= $friend["name"] ?></div>
        <div class="friend_information">
          <ul>
            <li class="posts"> <i class="fas fa-bell"></i>
              <?php
              echo " ". $friend["posts"];
              if($friend["posts"] > 1)
              {
                echo " nuevos posteos";
              }else {
                echo " nuevo posteo";
              }
              ?>
            </li>
            <li class="followers"> <i class="fas fa-user-friends"></i> <?= " ".$friend["followers"] . " seguidores" ?> </li>
            <li class="writings"> <i class="far fa-copy"></i> <?= " ".$friend["writings"] ." escritos" ?> </li>
          </ul>
        </div>
        <button type="submit" name="view_profile" method="get">
          Ver perfil
        </button>
      </div>
    <?php endforeach; ?>
    </div>

   <?php require_once("./partials/footer.php") ?>
