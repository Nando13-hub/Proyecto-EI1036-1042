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
$rows = consultar($pdo, "PruebaJose");

    foreach($rows as  $row) {
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
<a
                </td>
            </tr>
<?php
    }
?>
        </table>
    </body>
</html>