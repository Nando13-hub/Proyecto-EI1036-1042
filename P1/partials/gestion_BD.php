<?php
#include(dirname(__FILE__)."/../../../wp-config.php");

/** The name of the database */
define('DB_NAME', 'EI1036_42_al386122al386169');

/** MySQL database username */
define('DB_USER', 'al386169');

/** MySQL database password */
define('DB_PASSWORD', '73660682P');

/** MySQL hostname */
define('DB_HOST', 'db-aules.uji.es' );

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

function crearTablaActividades($pdo,$table)
{
   try {
      //Crea tabla si no existe
      $query = "CREATE TABLE IF NOT EXISTS  $table (
               nom_empresa VARCHAR(80) PRIMARY KEY, 
               nom_gestor VARCHAR(80) NOT NULL,
               adreça VARCHAR(150) NOT NULL, 
               codi_postal INT NOT NULL,
               població VARCHAR(80) NOT NULL,
               email VARCHAR(80) NOT NULL,
               informació VARCHAR(150) NOT NULL);";


      $pdo->exec($query);
   } catch (PDOException $e) {
      echo "Failed to get DB handle: " . $e->getMessage() . "\n";
      exit;
   }
}

function consultar($pdo,$table) {
   $query = "SELECT     * FROM       $table "; 
   $consult = $pdo->prepare($query);
   $a=$consult->execute(array());
   if (1>$a)echo 
      "InCorrectoConsulta";
   return ($consult->fetchAll(PDO::FETCH_ASSOC)); 

}

function anyadir($pdo,$table)
{
   try {
      $valores=[$_REQUEST["nomEmpresa"], $_REQUEST["nomGestor"],$_REQUEST["adreça"],$_REQUEST["codiPostal"],$_REQUEST["població"],$_REQUEST["email"],$_REQUEST["informació"]];
      $query = "INSERT INTO $table (nom_empresa,nom_gestor,adreça,codi_postal,població,email,informació) VALUES (?,?,?,?,?,?,?)";
      $consult = $pdo->prepare($query);
      $a=$consult->execute($valores); 
      if (1>$a)
         echo "InCorrecto";
      //$datos=consultar($pdo,$table);
      //print_r($datos);
      }
      catch (PDOException $e) {
          echo "Failed to get DB handle: " . $e->getMessage() . "\n";
          exit;
        }
}

/* Consultas 
 $query = "INSERT INTO    $table (?) VALUES (?,?)";
 $query = "DELETE   FROM   $table WHERE actividad_id =(?)";
 $query = "SELECT     * FROM       $table "; 
 */

$table="PruebaJose";
$pdo = new PDO("pgsql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASSWORD);  
# si utilitzes mysql 

#$pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASSWORD); 

crearTablaActividades($pdo,$table);
//anyadir($pdo,$table);
//listar($pdo,$table);
?>
