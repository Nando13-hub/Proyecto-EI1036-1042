<nav>
	<ul>
		<li>
			<a href="?action=home">Home</a>
		</li>
		<li>
			<a href="?action=registro">Registro</a>
		</li>
		<li>
			<a href="?action=listar">Listar</a>
		</li>
		<li>
			<a href="?action=nosotros">Nosotros</a>
		</li>
		<li>
			<a href="?action=envioFichero">EnvioFichero</a>
		</li>
		<li>
	<?php 
	if (isset($_SESSION["nombre"])) {?>
		<a><?php echo "Bienvenido " .$_SESSION["nombre"] ?></a>
	<?php }else{
	?>
			<a href="?action=loguear">Loguear</a>
<?php
	}
?>
		</li>
	
	</ul>
</nav>