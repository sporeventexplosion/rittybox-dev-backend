<?php

require_once '../vendor/autoload.php';

require_once './lib/Rittybox/Autoloader.php';


//Register the autoloader

$Autoloader = new Rittybox\Autoloader();
$Autoloader::register();

$loader = new Twig_Loader_Filesystem('./template');
$twig = new Twig_Environment($loader, array(
    //'cache' => './twig-compilation-cache',
));



echo $twig->render('index.html', array('name' => 'Test'));

?>