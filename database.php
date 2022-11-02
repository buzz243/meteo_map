
<?php
//on definit les parametres. pour que on ne repète plus pendant la connection
define('DB_HOST','localhost');
define('DB_NAME','logino');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
/*
define('DB_HOST','localhost');
define('DB_NAME','id18968482_testroutier');
define('DB_USERNAME','id18968482_uroot');
define('DB_PASSWORD','SeGv+Ioi&2qk-eZ=');
*/
try {
    $db=new PDO ('mysql:host='.DB_HOST.';dbname='.DB_NAME,DB_USERNAME,DB_PASSWORD);

    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);

} catch(PDOException $e){
    die('une erreur interne est survenue');

}
?>