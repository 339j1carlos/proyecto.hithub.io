<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.js"></script>
	<title>Realizar pedido</title>
	<style>
            .body {
                background: #ffe259; /* cuando utilizamos degradados en css se recomienda un background en caso que el navegador no soporte degradados haga un callback para q use un color solido*/
                background: linear-gradient(to right, #ffa751, #ffe259);
            }
            .bg{
                background-image: url(img/logo.jpg);
                background-position: center center;
            }
    </style>
</head>
<body>

	<div class="container w-75 bg-primary mt-5 rounded shadow">
            <div class="row align-items-stretch">
                <!-- aca se configura el responsive -->
                <!-- lo de col es cuando el breakpoint se ajuste xtra large -->
                <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded">
                    
                </div>
                <div class="col bg-white p-5 rounded-end">
                    <div class="text-end"> <!-- alinea el texto a la derecha -->
                        <img src="img/celebrando.png" alt="logo">
                    </div>
                    <h2 class="fw-bold text-center py-5">Disfrutemos ¡Celebrar!</h2>
                      <!-- login -->
                      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                            <!-- .mb-4*3 pner eso -->
                            <div class="mb-4">
                                <label for="text" class="form-label">Nombre de usuario</label>
                                <input type="text" class="form-control" name="username">

                            </div>
                            <div class="mb-4"></div>
                                <label for="clave" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" name="password">
                                <br>
                            <!-- .d-grid para lo que sigue -->
                            <div class="d-grid">
                                <button type="submit" class="btn btn-dark btn-lg btn-block" name="enviar">Iniciar Sesión</button>

                            </div>                        
                      </form>

                </div>
            </div> 
    </div>

</body>
</html>

<?php 

	$user1 = "admin";
	$pass1 = "umg";
	$user2 = "jmt";
	$pass2 = "umg321";
	$user3 = "prueba";
	$pass3 = "umg147";
	if (isset($_POST['enviar'])) {
		$usuario = $_POST['username'];
		$pass = $_POST['password'];

		if ($usuario == $user1 || $usuario == $user2 || $usuario == $user3) {
			if ($pass == $pass1 || $pass == $pass2 || $pass == $pass3) {
                $crear = fopen("pedidos" . ".txt", 'a');

                fwrite($crear, "\n");
                fwrite($crear, "Vendedor: " .$usuario);
                fwrite($crear, "\n");

                fclose($crear);

				header("Location: categoria.php");
                exit();
			}
            else{
                echo "Contraseña incorrecta";
            }
		}
        else{
            echo "Usuario incorrecto";
        }
	}

 ?>