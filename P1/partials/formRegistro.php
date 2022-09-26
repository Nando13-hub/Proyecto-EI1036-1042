
<main>
	<h1>Gestión de Actividades </h1>
	<form class="fom_usuario" action="?action=registrar" method="POST">
		<legend>Datos básicos</legend>

		<label for="nomEmpresa">Nom Empresa</label>
		<br/>
		<input type="text" name="nomEmpresa" class="item_requerid" size="20" maxlength="25" value="<?php print $nomEmpresa ?>"
		 placeholder="Nom Empresa" />
		<br/>

		<label for="nomGestor">Nom Gestor</label>
		<br/>
		<input type="text" name="nomGestor" class="item_requerid" size="20" maxlength="25" value="<?php print $nomGestor ?>"
		 placeholder="Nom Gestor" />
		<br/>

		<label for="adreça">Adreça</label>
		<br/>
		<input type="text" name="adreça" class="item_requerid" size="20" maxlength="25" value="<?php print $adreça ?>"
		 placeholder="Adreça" />
		<br/>

		<label for="codiPostal">Codi Postal</label>
		<br/>
		<input type="text" name="codiPostal" class="item_requerid" size="20" maxlength="25" value="<?php print $codiPostal ?>"
		 placeholder="Codi Postal" />
		<br/>

		<label for="població">Població</label>
		<br/>
		<input type="text" name="població" class="item_requerid" size="20" maxlength="25" value="<?php print $població ?>"
		 placeholder="Població" />
		<br/>

		<label for="email">Email</label>
		<br/>
		<input type="text" name="email" class="item_requerid" size="20" maxlength="25" value="<?php print $email ?>"
		 placeholder="Email" />
		<br/>

		<label for="informació">Informació</label>
		<br/>
		<input type="text" name="informació" class="item_requerid" size="20" maxlength="50" value="<?php print $informació ?>"
		 placeholder="Informació" />
		<br/>

		<input type="submit" value="Enviar">
		<input type="reset" value="Deshacer">
	</form>
</main>