<?php

require '../vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('../src/View');
$twig = new Twig_Environment($loader);


$products = ['Html', 'Css', 'PHP', 'MySql', 'Javascript'];
echo $twig->render('index.html.twig',[
    'products' => $products]);
