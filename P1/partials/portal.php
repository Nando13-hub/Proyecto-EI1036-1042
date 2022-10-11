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

include(dirname(__FILE__)."/../partials/gestion_BD.php");

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

    case "nosotros":
            $central = "/../partials/nosotros.php";
            break;

    case "envioFichero":
            $central = "/../partials/formEnvioFicheros.php";
            break;

    case "home":
        $central = "/../partials/home.php";
        break;

    case "registro":
        $central = "/../partials/formRegistro.php";
        break;

    case "registrar":
        $nomEmpresa=$_REQUEST["nomEmpresa"];
        
        $nomGestor=$_REQUEST["nomGestor"];

        $adreça=$_REQUEST["adreça"];

        $codiPostal=$_REQUEST["codiPostal"];

        $població=$_REQUEST["població"];

        $email=$_REQUEST["email"];

        $informació=$_REQUEST["informació"];

        anyadir($pdo, "Prueba2Jose");
        $central = "/../partials/listar.php";
        break;
    
    case "listar":
        $rows =  consultar($pdo, "Prueba2Jose");
    
        $central = "/../partials/listar.php";
        break;

    case "borrar":
        borrar($pdo, "Prueba2Jose");
    
        $central = "/../partials/listar.php";
        break;

    case "modificar":    

        $central = "/../partials/modificar.php";
        break;

    case "modificado":
        $mEmpresa=$_REQUEST["nom_empresa"];
        
        $nomGestor=$_REQUEST["nom_gestor"];

        $adreça=$_REQUEST["adreça"];

        $codiPostal=$_REQUEST["codi_postal"];

        $població=$_REQUEST["població"];

        $email=$_REQUEST["email"];

        $informació=$_REQUEST["informació"];

        modificar($pdo, "Prueba2Jose");
    
        $central = "/../partials/listar.php";
        break;


    case "envio":
        $nombrefichero=$_FILES["foto_cliente"]['name'];
        $destino=dirname(__FILE__)."/../img/ficherosClientes/";       
        if(!move_uploaded_file($_FILES["foto_cliente"]['tmp_name'],$destino.$nombrefichero)) {
            $data["error"] ="Failed to create file: $nombrefichero";}
        else 
            $data["exito"] = "Fichero subido con éxito"; 
            
        $central = "/../partials/defecto.php";
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
