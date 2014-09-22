<?php

require_once("./conexao.php");
require_once("../engine/funcoes.php");


//trazendo página atual.
function getRoute(){

    $getPath = curRoute();
    $sql = "SELECT * FROM pages WHERE title = :titulo";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue("titulo", $getPath);
    $stmt->execute();
    $knownRoutes = $stmt->fetch(PDO::FETCH_ASSOC);

    return $knownRoutes;

}

//travendo página de erro 404.
function getPageError(){

    $getPath = 404;
    $sql = "SELECT * FROM pages WHERE title = :titulo";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue("titulo", $getPath);
    $stmt->execute();
    $knownRoutes = $stmt->fetch(PDO::FETCH_ASSOC);

    return $knownRoutes;

}


?>
