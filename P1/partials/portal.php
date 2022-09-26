<?php
    //view_form.php

/**
 * * Descripción: Controlador principal
 * *
 * * Descripción extensa: Iremos añadiendo cosas complejas en PHP.
 * *
 * * @author  Lola <dllido@uji.es> <fulanito@example.com>
 * * @copyright 2018 Lola
 * * @license http://www.fsf.org/licensing/licenses/gpl.txt GPL 2 or later
 * * @version 2

 * */

//echo $_SERVER['DOCUMENT_ROOT']."/partials/footer.php";
if (isset($_REQUEST['action'])) $action = $_REQUEST["action"];
else $action = "home";


switch ($action) {
    /*case "home":
        $nombre="";
        $descripcion="";
        $central = "/../partials/centralForm.php";
        break;
    */
    case "registrar":
            echo "nomEmpresa:",$_REQUEST["nomEmpresa"];
            $nomEmpresa=$_REQUEST["nomEmpresa"];
            
            echo "nomGestor:",$_REQUEST["nomGestor"];
            $nomGestor=$_REQUEST["nomGestor"];

            echo "adreça:",$_REQUEST["adreça"];
            $adreça=$_REQUEST["adreça"];

            echo "codiPostal:",$_REQUEST["codiPostal"];
            $codiPostal=$_REQUEST["codiPostal"];

            echo "població:",$_REQUEST["població"];
            $població=$_REQUEST["població"];

            echo "email:",$_REQUEST["email"];
            $email=$_REQUEST["email"];

            echo "informació:",$_REQUEST["informació"];
            $informació=$_REQUEST["informació"];

            $central = "/../partials/centralForm.php";
            break;

    case "nosotros":
            $central = "/../partials/nosotros.php";
            break;

    case "home":
        $central = "/../partials/home.php";
        break;

    case "registro":
        $central = "/../partials/formRegistro.php";
        break;

    default:
        
        $data["error"] = "Accion No permitida";

        $central = "/../partials/defecto.php";
}




include(dirname(__FILE__)."/../partials/header.php");
include(dirname(__FILE__)."/../partials/menu.php");

include(dirname(__FILE__).$central);
var_dump($GLOBALS);
include(dirname(__FILE__)."/../partials/footer.php");
?>