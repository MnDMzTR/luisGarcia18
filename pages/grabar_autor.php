<?php
session_start();
if (isset($_SESSION["user"])==""){
    header("Location:login.php");
}
require_once "conn_mysql_luis.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registro de autores</title>
    <link rel="stylesheet" href="../css/layout.css">
    <script src="../js/validacion.js"></script>
</head>
<body id="top">
<div class="wrapper row0">
    <div id="topbar" class="hoc clear">
        <div class="fl_left">
            <ul class="nospace inline pushright">
                <li><i class="fa fa-phone"></i> (386) 106 4302</li>
                <li><i class="fa fa-envelope-o"></i> luisgarcia@alumnos.udg.mx</li>
            </ul>
        </div>
        <div class="fl_right">
            <ul class="faico clear">
                <li><a class="faicon-facebook" href="http://www.facebook.com/LuizGarcia.CA"><i class="fa fa-facebook"></i></a></li>
                <li><a class="faicon-twitter" href="https://twitter.com/RayoMonster"><i class="fa fa-twitter"></i></a></li>
                <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
            </ul>
        </div>
    </div>
</div>
<div class="wrapper row1">
    <header id="header" class="hoc clear">
        <div id="logo" class="fl_left">
            <h1><a href="../index.php">Programación Web</a></h1>
        </div>
        <nav id="mainav" class="fl_right">
            <ul class="clear">
                <li><a href="../index.php">Inicio</a></li>
                <?php
                if (isset($_SESSION["user"])){?>
                <li><a class="drop" href="#"><?php echo $_SESSION["user"];?></a>
                    <ul>
                        <li><a href="logoff.php">Cerrar Sesión</a></li>
                        <li><a href="reporte_libros.php">Reporte de libros</a></li>
                        <li><a href="grabar_libros.php">Registrar Libros</a></li>
                    </ul>
                    <?php } ?>
            </ul>
        </nav>
    </header>
</div>
<div class="wrapper row3 bgded fondoformulario">
    <main class="hoc container clear">
        <div id="comments">
            <h3 class="healsettabla2" align="center">Registro de Autores</h3>
            <form action="registrar_autor.php" method="post" id="formulario" onsubmit="return validarAutor()">
                <div class="one_quarter first">
                    <label for="txtnumero"><b>Id de autor</b></label>
                    <input type="number" id="txtnumero" name="txtnumero" placeholder="Id del autor: 123" required>
                </div>
                <div class="one_third first">
                    <label for="txtnombre"><b>Nombre del autor: </b></label>
                    <input type="text" id="txtnombre" name="txtnombre" placeholder="Nombre del nuevo autor" required>
                </div>
                <div class="one_third">
                    <label for="txtapaterno"><b>Apellido Paterno: </b></label>
                    <input id="txtapaterno" name="txtapaterno" type="text" placeholder="Apellido paterno del autor" required>
                </div>
                <div class="one_third">
                    <label for="txtamaterno"><b>Apellido Materno</b></label>
                    <input id="txtamaterno" name="txtamaterno" type="text" placeholder="Apellido materno del autor" required>
                </div>
                <div class="one_half first">
                    <label for="txtdireccion"><b>Dirección: </b></label>
                    <input id="txtdireccion" name="txtdireccion" type="text" placeholder="Domicilio u dirección" required>
                </div>
                <div class="one_quarter">
                    <label for="txtpais"><b>Pais: </b></label>
                    <input id="txtpais" name="txtpais" type="text" placeholder="Pais de origen: México" required>
                </div>
                <div class="one_quarter">
                    <label for="txtnickname"><b>Nickname: </b></label>
                    <input id="txtnickname" name="txtnickname" type="text" placeholder="Nombre de usuario" required>
                </div>
                <div>
                    <div class="one_half center first">
                        <input class="btnagregar" type="submit" name="submit" value="Registrar Libro" >
                    </div>
                    <div class="one_half center">
                        <input class="btnagregar" type="reset" value="Limpiar Campos">
                    </div>
                    <div>
                        <input class="btnagregar" onclick="location.href='reporte_libros.php'" type="button" value="Regrasar al reporte">
                    </div>
                </div>
            </form>
        </div>
    </main>
    <div class="wrapper row5">
        <div id="copyright" class="hoc clear">
            <!-- ################################################################################################ -->
            <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="index.php">Luis Ángel García Castro</a></p>
            <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
            <!-- ################################################################################################ -->
        </div>
    </div>
</body>
</html>
