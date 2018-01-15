<?php
namespace ArchaeologicalStudies\helper\form;
require(__DIR__ . '/../../../vendor/autoload.php');


//use input;

$textfield = new input(array(
    "type" => "text",
    "name" => "info"
));

echo $textfield->field();

$intfield = new input(array(
    "type" => "number",
    "name" => "telephone",
    "label" => "Telephpone",
    "value" => 896
));

echo $intfield->field();

?>
