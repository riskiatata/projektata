<?php
header ('Acces-Control-Allow-Origin: *');
$db_name="dataku";
$db_server ="localhost";
$db_user= "root";
$db_pass= "";
 
$db = new PDO("mysql:host={db_server};dbname={$db_name};charset=utf8",$db_user, $db_pass);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARE, false);
$db_>setAttribute(PDO::ATTR_ERRMODE_, PDO::ERRMODE_EXPECTION);
?>