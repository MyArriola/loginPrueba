<html>
    <head>
        <title>LOGIN</title>
        <meta charset="utf-8">
    </head>
    <body>
        <form method="POST" action="">
            USUARIO <input type="text" name="idUser"><br>
            CONTRASEÑA <input type="password" name="pw"><br>
            <input type="submit" value="Buscar">
        </form>
    </body>
</html>

<?php
    session_start();
    include("conexion.php"); 
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $query = "SELECT idUsuario, contrasena FROM usuarios";
        $resultado = mysqli_query($_SESSION['conexion'],$query) or die("ERROR DE LA CONSULTA A LA BD");
        $error = true;
        while($fila = mysqli_fetch_array($resultado)){
            if(($fila['idUsuario'] == $_POST['idUser']) && ($fila['contrasena'] == $_POST['pw'])){
                $error = false;
                $_SESSION['ID'] = $_POST['idUser'];
                break; //sale del bucle
            }
            else{$error = true;}
        }
        if($error == true){echo '<br> Contraseña o usuario incorrectos';}
        else{
            header("Location: perfil/perfil.html"); //me redirecciona la pagina que deseo
            exit();//finaliza la función header
        }
    }
?>