<?php

require( __DIR__ . '/../app/vendor/autoload.php');

use ArchaeologicalStudies\core\router;

$root = new router(array(
    'uri' => $_SERVER['REQUEST_URI'], 
    'method' => $_SERVER['REQUEST_METHOD']
));

echo '<pre>';
var_dump($root);

echo '<br />';
var_dump($root->redirect());

echo '</pre>';
?>
