<!DOCTYPE html>
<html>
    <body>
    <?php
    $rows = consultar($pdo, "Prueba2Jose");
    $id = $_REQUEST["id"];

    foreach($rows as $row) {
        if ($row["id_empresa"] == $id ){ 
?>
        <main>
        <h1>Modificado</h1>
            <table>
            <form action="?action=modificado&id=<?php echo $row["id_empresa"];?>" method="POST">

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

                <tr>
                    <td><input type="text" name="nom_empresa" class="item_requerid" size="20" maxlength="25" value="<?php print $row["nom_empresa"]; ?>"></td>
                    <td><input type="text" name="nom_gestor" class="item_requerid" size="20" maxlength="25" value="<?php print $row["nom_gestor"]; ?>"></td>
                    <td><input type="text" name="adreça" class="item_requerid" size="20" maxlength="25" value="<?php print $row["adreça"]; ?>"></td>
                    <td><input type="number" name="codi_postal" class="item_requerid" size="20" maxlength="25" value="<?php print $row["codi_postal"]; ?>"></td>
                    <td><input type="text" name="població" class="item_requerid" size="20" maxlength="25" value="<?php print $row["població"]; ?>"></td>
                    <td><input type="text" name="email" class="item_requerid" size="20" maxlength="25" value="<?php print $row["email"]; ?>"></td>
                    <td><input type="text" name="informació" class="item_requerid" size="20" maxlength="25" value="<?php print $row["informació"]; ?>"></td>
                    <td>
                        <input type="submit" value="Modificar">
                    </td>
                    
                </tr>

<?php
    }
}

?>

</form>
                </table>
        </main>
    </body>
</html>