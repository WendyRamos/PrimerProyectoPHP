<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shorcut icon" type="image/x-icon" href="img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/lectorCodigo.css">
    <link rel="stylesheet" type="text/css" href="css/vistaAsistencia.css">
    <link rel="stylesheet" type="text/css" href="css/grid/vistaAsistencia.css">
    <title>Colegio Cramer</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario"name="codBarras">
        <input type="text" name="codigo_barras" id="" placeholder="Codigo de Barras">
        <select name="estado" id="">
            <?php foreach($rows as $row):?>
                <option value="<?php print($row->idestadoasistencia); ?>"><?php print($row->descripcion); ?></option>
            <?php endforeach;?>
        </select>
        <input class="btn-form" type="submit" value="Enviar" onclick="codBarras.submit()">
    </form>

        <!--div class="contenedor"> 
        <header>    
            <figure class="conlogo">
                <a href="views/index.php"><img class="logo" src="img/logo.png"></a>
            </figure>
            <div class="cramer">
                <p>CONTROL DE ASISTENCIAS</p>
                <p class="text">COLEGIO PARTICULAR "CRAMER"</p>
                <P>LA FECHA DE HOY</P>
            </div>
        </header>
        <section>
            <img src="" alt="">
            <div class="infoLLegada i1">HORA DE LLEGADA</div>
            <div class="infoLLegada i2">fecha</div>
            <div class="infoAlumno">
                <h3 class="h31">APELLIDO PATERNO
                    <p><?php echo $resultado['paterno']; ?></p>
                </h3>
                <h3 class="h32">APELLIDO MATERNO
                    <p><?php echo $resultado['materno']; ?></p>
                </h3>
                <h3 class="h33">NOMBRES
                    <p><?php echo $resultado['nombres']; ?></p>
                </h3>
                <div >
                    <h3 class="h34">DNI
                        <p><?php echo $resultado['dni']; ?></p>
                    </h3>
                    <h3 class="h35">CODIGO DE ALUMNO
                        <p><?php echo $resultado['idalumno']; ?></p>
                    </h3>
                    <h3 class="h36">GRADO
                        <p><?php echo $resultado['descripcionGrado']; ?></p>
                    </h3>    
                    <h3 class=h37>SECCION
                        <p><?php echo $resultado['descripcion']; ?></p>
                    </h3> 
                </div>
            </div>
                <?php if($estado == 1): ?>
                    <p class="mensaje">FELICITACIONES LLEGASTE TEMPRANO!!</p>
                <?php elseif($estado == 2): ?>
                    <p class="mensaje">UY! LLEGASTE TARDE, PUEDES HACERLO MEJOR</p>
                <?php endif ?>
        </section>
    </div>
</body>
</html-->

