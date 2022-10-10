<!DOCTYPE html>
<html>
    <body>
        <h1>Modificado</h1>
        <table>
            <tr>
                <th>Nom empresa</th>
                <th>Nom gestor</th>
                <th>adreça</th>
                <th>Codi Postal</th>
                <th>Poblacio</th>
                <th>Email</th>
                <th>Info</th>
                <th>Edición</th>
            </tr>
<?php
    $datos =  consultarDato($pdo, "Prueba2Jose");
?>
            <tr>
                <td><?php echo $datos["nom_empresa"];?></td>
                <td><?php echo $datos["nom_gestor"];?></td>
                <td><?php echo $datos["adreça"];?></td>
                <td><?php echo $datos["codi_postal"];?></td>
                <td><?php echo $datos["població"];?></td>
                <td><?php echo $datos["email"];?></td>
                <td><?php echo $datos["informació"];?></td>
                <td>
                <a href="?action=borrar&id=<?php echo $datos["id_empresa"];?>"><button class="button">Borrar</button></a><br/>
                <a href="?action=modificar&id=<?php echo $datos["id_empresa"];?>"><button class="button">Modificar</button></a><br/>
                </td>
            </tr>

        </table>
    </body>
</html>