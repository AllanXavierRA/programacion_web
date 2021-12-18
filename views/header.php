<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>CIA CETITESTYDY S.A.</title>
	<link rel="stylesheet" href="<?php echo RUTA; ?>/css/styles.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
</head>
<body>
	<header>
		<div class="contenedor">
			<div class="logo izquierda">
				<p><a href="<?php echo RUTA; ?>">CIA CETITESTYDY S.A.</a></p>
			</div>
            <div class="derecha">
                <form action="<?php echo RUTA; ?>/buscar.php" method="get" name="busqueda" class="buscar">
                    <input type="text" name="busqueda" placeholder="Search">
                    <button type="submit" class="fa fa-search"></button>
                </form>
                <nav class="menu">
                    <ul>
                        <li>
                            <a href="<?php echo RUTA; ?>formulario/formulario.html"><i class="fa fa-envelope">Formulario</i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>
		</div>
	</header>
</body>
</html>
