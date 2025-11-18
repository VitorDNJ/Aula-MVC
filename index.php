<?php
/*require_once 'views/menuViews.php';
$url = $_SERVER['REQUEST_URI'];
print "$url";
print "<br> <br>";
$rota = explode("/", $url);
print_r($rota);
*/
$pagina = isset($_GET['pagina']) ? $_GET['pagina'] : '';

switch ($pagina){
    case "";
    require_once "Controller/menuController.php";
    $menu = new MenuControllers();
    $menu -> index();
    Break;
    case "cliente";
    require_once "Controller/clienteController.php";
    $cliente = new ClienteController();
    $cliente -> index();
    Break;
    case "produto";
    require_once "Controller/produtoController.php";
    Break;
    case "contato";
    require_once "Controller/contatoController.php";
    Break;
}


?>