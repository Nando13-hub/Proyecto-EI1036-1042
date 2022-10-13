<?php //control_form.php 
if (isset($data["error"])) {
        print ("<P>Error: ".$data["error"]. "</P>");
}

if (isset($data["exito"])) {
	print ("<P>Exito: ".$data["exito"]. "</P>");
}

 ?>