<?php
require_once(dirname(__DIR__)."/db/db_config.php");
if($_SERVER['REQUEST_METHOD'] == "GET"){ 

    $identificacion=$_GET['identificacion'];
    $db= new DBConfig();
    $dbConnection = $db->connect();
    $query = "SELECT * FROM user where identificacion=$identificacion";
    $user = $dbConnection->query($query)->fetchAll();
    print_r($user[0][0]);
} 
else{ 
    echo "No se pudo"; 
} 