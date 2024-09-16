<html>
    <head>
        <title>Modificar perfil</title>
        <meta charset="utf-8">
    </head>

    <body>
        <a href="modificacionDatos.php">
            <button> Modificación de datos</button>
        </a>
        
        <a href="lecturaUsuarios.php">
            <button>Lista de usuarios</button>
        </a>
        <BR><BR>
    </body>

    <body>
        <form method="POST" action="">
            Modificar:
            <select name="opcionModificar">
                <option value="0">Nombre de usuario</option>
                <option value="1">Contraseña</option>
            </select>

            <input type="submit" value="Cargar">
        </form>
        
        <?php
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                if($_POST['opcionModificar'] == "0"){}}
                ?>
                <form method="POST" actio="">
                    NUEVO NOMBRE DE USUARIO <input type="text" name="actualizacionNombre">
                    <input type="submit" value="Cambiar">
                </form>

                <?php
                if($_SERVER['REQUEST_METHOD'] == "POST"){
                    include("../conexion.php");
                    
                    $query = "SELECT idUsuario FROM  usuarios";
                    $resultado = mysqli_query($_SESSION['conexion'],$query) or die ("ERROR DE LA CONSULTA A LA BASE DE DATOS");

                    while($fila = mysqli_fetch_array($resultado)){
                        if($_POST['']){}
                    }
                }
        ?>
    </body>
</html>

<?php
    session_start();
    include("../conexion.php");
    
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if($_POST['opcionModificar'] == "0"){
            ?>
            
            <?php
            $query = "SELECT idUsuario FROM  usuarios";
            $resultado = mysqli_query($_SESSION['conexion'],$query) or die ("ERROR DE LA CONSULTA A LA BASE DE DATOS");

            //while($fila = mysqli_fetch_array($resultado)){
            //    if($_POST['']){}
            //}
        }
    }
?>