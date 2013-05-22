<?php
require_once '/lib/Twig/Autoloader.php';
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('.');
$twig = new Twig_Environment($loader);

$main = file_get_contents('main.html');
$index = file_get_contents('index.html');
echo $twig->render("main.html", array('a' => 'b'));
?>