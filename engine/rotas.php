<?php

$knownRoutes = [
    "" => "index.php",
    "/" => "index.php",
    "index.php" => "index.php",
    "home" => "includes/home.php",
    "empresa" => "includes/empresa.php",
    "produtos" => "includes/produtos.php",
    "servicos" => "includes/servicos.php",
    "contato" => "includes/contato.php",
];

function curRoute() {
    return str_replace(".php", "", substr($_SERVER["REQUEST_URI"],strrpos($_SERVER["REQUEST_URI"],"/")+1));
}

$routeExists = function($route) use ($knownRoutes) {
    return array_key_exists($route, $knownRoutes);
};

if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js)$/', $_SERVER["REQUEST_URI"])) {
    return false;
} elseif ($routeExists(curRoute())) {

    $pageName = $knownRoutes[curRoute()];

        $getPageContent = function () use ($pageName) {
            require_once"$pageName";
        };
            return $getPageContent();

} else {
    require_once("includes/404.php");
}

?>