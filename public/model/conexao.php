<?php

try{
    $conn = new \PDO("mysql:host=localhost;dbname=education", "root","root");
}catch (\PDOException $e){
    die("Erro código: ". $e->getCode().": ". $e->getMessage());
}

?>
