<html>
    <head>
        <title>Lista de usuarios</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            include("../conexion.php");

            $query = "SELECT idUsuario, estado, fechaIngreso, fechaBaja from usuarios";
            $resultado = mysqli_query($_SESSION['conexion'],$query) or die("ERROR: FALLA EN LA CONSULTA A LA BASE DE DATOS");

                ?><table align="center" width="800">
                    <tr borde="1">
                        <td align="CENTER">USUARIO     </td>
                        <td align="CENTER">ESTADO     </td>
                        <td align="CENTER">FECHA DE INGRESO     </td>
                        <td align="CENTER">FECHA DE BAJA     </td>
                    </tr> <?PHP
            while($fila = mysqli_fetch_array($resultado)){
                ?>
                    <tr borde="1">
                        <td><?php echo $fila['idUsuario']?></td>
                        <td align="center"><?php echo $fila['estado']?></td>
                        <td align="center"><?php echo $fila['fechaIngreso']?></td>
                        <td align="center"><?php echo $fila['fechaBaja']?></td>
                    </tr>
                </table>
                <?php
            }
        ?>
    </body>
</html>