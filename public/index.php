<?php
require '../vendor/autoload.php';

$products = ['cooki', 'crepe', 'bonbon', 'gateau', 'flan'];

$loader = new Twig\Loader\FilesystemLoader(__DIR__.'/../src/View');
$twig = new Twig\Environment($loader);
echo $twig->render('index.html.twig', [
  'products' => $products
]);

    
