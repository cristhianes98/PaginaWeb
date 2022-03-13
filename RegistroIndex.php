
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="RegistroCss.css">
        <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
        <title>Registro</title>
    
    </head>
    <body>
    
        <header >
            <h1 style="color:rgb(255, 255, 255)" >SISTEMASSUPERPULSHIPER</h1>
            <nav>
                    <li><a href ="index.html">Inicio</a></li>
                    <li><a href ="Cursos.html">Cursos</a></li>
                    <li><a href ="IniciarSesion.php">Iniciar Sesion</a></li>
            </nav>
        </header>
        <div class="registro">
        <form method="post">
    	<h4>Registrate!</h4>
    	<input class="controls" type="text" style="color: white;" name="nombre" placeholder="Nombre">
    	<input class="controls" type="text" style="color: white;" name="apellido" placeholder="apellido">
    	<input class="controls" type="text" style="color: white;" name="email" placeholder="Email">
    	<input class="controls" type="password" style="color: white;" name="contraseña" placeholder="contraseña">
    	<input class="boton" type="submit" name="register">
		<p><a href="IniciarSesion.php"> ya tengo una cuenta</a></p>
    </form>
        <?php 
        include("registrar.php");
        ?>
        </div>
    </body>
    </html>