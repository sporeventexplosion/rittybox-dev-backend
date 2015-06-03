<?php

require_once '../vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('./template');
$twig = new Twig_Environment($loader, array(
    'cache' => './twig-compilation-cache',
));

echo $twig->render('index.html', array('name' => 'Test'));

?>