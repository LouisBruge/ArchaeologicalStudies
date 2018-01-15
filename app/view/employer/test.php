<?php
require(__DIR__ . '/../../vendor/autoload.php');

use ArchaeologicalStudies\controller\employer;

$archeopole = new employer(array(
    "id" => 1,
    "name" => "archeopole"));

var_dump($archeopole);

?>
