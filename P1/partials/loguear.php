<!DOCTYPE html>
<html>
    <body>
        <form action="?action=login" method="POST">
        <h1>Login</h1>
            <label for="nom">Nom </label>
            <br/>
            <input type="text" name="nom" class="item_requerid" size="20" maxlength="120" placeholder="Nom" />
            <br/>
            <br/>

            <label for="contraseña">Contraseña</label>
            <br/>
            <input type="password" name="contraseña" class="item_requerid" size="20" maxlength="120" placeholder="Contraseña" />
            <br/>           
            <br/>

            <input type="submit" value="Login">
            <br/>
            <br/>
        </form>
    </body>
</html>