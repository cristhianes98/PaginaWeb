
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
                <li><a href ="RegistroIndex.php">Registro</a></li>
        </nav>
    </header>

    <div class="registro">
        <form action="validar.php" method = "post">
    	<h4>Inicia Sesion</h4>
    	<input class="controls" type="text" style="color: white;" name="nombre" placeholder="Nombre">
    	<input class="controls" type="password" style="color: white;" name="contraseña" placeholder="contraseña">
    	<input class="boton" type="submit" value = "ingresar">
		<p><a href="RegistroIndex.php"> No tengo una cuenta</a></p>
    </form>
        </div>

</body>
</html>