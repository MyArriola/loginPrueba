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

            <input type="submit" value="Cargar" name="boton">
        </form>

        <?php
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                //echo '--'.$opSelect.'--';
                if(($_POST['opcionModificar'] == "0") && ($_POST['boton'] == "Cargar")){
                ?>
                    <form method="GET" action="">
                        NUEVO NOMBRE DE USUARIO <input type="text" name="updateNombreUser">
                        <input type="submit" value="Cambiar" name="boton" >
                    </form>

                    <?php
////                    if(($_SERVER['REQUEST_METHOD'] == "POST") && ($_POST['boton'] == "Cambiar")){
                        include("../conexion.php");

//                        //$opSelect = $_POST['opcionModificar'];
//                        //echo '--'.$opSelect.'--';
                        $query = "SELECT idUsuario FROM usuarios";
                        $resultado = mysqli_query($_SESSION['conexion'],$query) or die ("ERROR DE LA CONSULTA A LA BASE DE DATOS");

                        while($fila = mysqli_fetch_array($resultado)){
                            $_GET['updateNombreUser'] = " ";
                            if(($_GET['updateNombreUser'] != null) && ($_GET['boton'] == "Cambiar")){
                                if(($_GET['updateNombreUser'] == $fila['idUsuario'])){
                                    echo 'USUARIO EXISTENTE, cambie el nombre de usuario';
                                    //break;
                                }
                                else{
                                    $queryInsert = "UPDATE usuarios SET idUsuario = '$_GET[updateNombreUser]' WHERE idUsuario = '$_session[ID]'";
                                    $resultadoUpdate = mysqli_query($_SESSION['conexion'], $queryInsert) or die("ERROR: FALLO EN LA ACTUALIZACION DE LA TABLA");
                                    echo '<BR> ACTUALIZACIÓN FINALIZADA <BR>';
                                }
                            }
                        }
  //                  }
                }
            }
        ?>
    </body>
</html>

<?php
//    session_start();
//    include("../conexion.php");
//    
//    if($_SERVER['REQUEST_METHOD'] == "POST"){
//        if($_POST['opcionModificar'] == "0"){
            ?>
            
            <?php
//            $query = "SELECT idUsuario FROM  usuarios";
//            $resultado = mysqli_query($_SESSION['conexion'],$query) or die ("ERROR DE LA CONSULTA A LA BASE DE DATOS");
//
//            //while($fila = mysqli_fetch_array($resultado)){
//            //    if($_POST['']){}
//            //}
//        }
//    }
?>