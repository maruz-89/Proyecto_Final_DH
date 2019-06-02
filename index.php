<?php
$section="LogIn";
require_once("./partials/head.php");
?>

  <body>
    <div class="container" style="margin-top:30px; margin-bottom: 30px;">
        <div class="row justify-content-center">
        <div class= "site-title">
          <h1> SYZYGY </h1>
          <h3>EL ENCUENTRO FORTUITO </h3>
        </div>

        <form method="post" enctype="multipart/form-data">
  					<div class="row">
  						<div class="col-sm-10">
                <h2>INICIAR SESIÓN</h2>
  							<div class="form-group">
  								<input type="text" name="user" class="form-control" placeholder="Ingrese su usuario">
                  <a href="">Olvidé mi usuario</a>


                </div>
                <div class="form-group">
  								<input type="password" name="pass" class="form-control" placeholder="Contraseña">
                  <a href="">Olvidé mi contraseña</a>

                  <button type="submit" class="btn btn-primary">Registrarse</button>

                </div>
                <div class="col-12">
                  <div class="register">
                    <p>¿Todavía no estás registrado?</p>
                    <a href="register.php">REGISTRARME AHORA </a>
                  </div>




  						</div>





              </div>
            </div>
          </div>
        </div>



  </body>
</html>
