<!DOCTYPE html>
<html>
    <body>
        <h1>Listado</h1>
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
                <td><?php echo $row["nom_empresa"];?></td>
                <td><?php echo $row["nom_gestor"];?></td>
                <td><?php echo $row["adreça"];?></td>
                <td><?php echo $row["codi_postal"];?></td>
                <td><?php echo $row["població"];?></td>
                <td><?php echo $row["email"];?></td>
                <td><?php echo $row["informació"];?></td>
                <td>
                <a href="?action=borrar&id=<?php echo $row["id_empresa"];?>"><button class="button">Borrar</button></a><br/>
                <a href="?action=modificar&id=<?php echo $row["id_empresa"];?>"><button class="button">Modificar</button></a><br/>
                </td>
            </tr>

        </table>
    </body>
</html>