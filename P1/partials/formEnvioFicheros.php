<main>
	<h1>Gestión de Actividades </h1>
    <form class="fom_usuario" action="?action=envio" method="POST" enctype="multipart/form-data">

        <label for="nombre">Nombre</label>
		<br/>
		<input type="text" name="nombre" class="item_requerid" size="20" maxlength="25">
		<br/>

		<label for="fichero">Fichero</label>
		<br/>
        <input type="file" accept="image/*" name="foto_cliente" id="upload">
        <br/>
        <br>
        <input type="submit" value="Enviar">
        <input type="reset" value="Deshacer">
  </form>
</main>