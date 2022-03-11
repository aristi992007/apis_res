<?php
require_once(dirname(__DIR__)."../db/db_config.php");
if($_SERVER['REQUEST_METHOD'] == "GET"){ 

    $identificacion=$_GET['identificacion'];
    $db= new DBConfig();
    $dbConnection = $db->connect();
    $query = "SELECT * FROM user";
    $user = $dbConnection->query($query)->fetchAll(PDO:: FETCH_ASSOC);

    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    echo(json_encode($user));
} 
else{ 
    echo "No se pudo"; 
} 