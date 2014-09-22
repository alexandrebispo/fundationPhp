<?php
require_once("./funcoes.php");
require_once("./../model/conexao.php");

if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js)$/', $_SERVER["REQUEST_URI"])) {
    return false;
} elseif (COUNT(getRoute()) > 0) {
    $getPath = curRoute();
    $sql = "SELECT * FROM education.pages WHERE title = :titulo";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(":titulo", $getPath);
    $stmt->execute();
    $knownRoutes = $stmt->fetch(PDO::FETCH_ASSOC);

    $pageName = $knownRoutes['content'];

    $getPageContent = function () use ($pageName) {
        echo $pageName;
    };
    return $getPageContent();


} else {
    $getPath = 404;
    $sql = "SELECT * FROM pages WHERE title = :titulo";
    $stmt = $conn->prepare($sql);

    $stmt->bindValue("titulo", $getPath);
    $stmt->execute();
    $knownRoutes = $stmt->fetch(PDO::FETCH_ASSOC);

    $pageName = $knownRoutes;

    $getPageContent = function () use ($pageName) {
        echo $pageName;
    };
    return $getPageContent();

}

?>