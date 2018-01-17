<?php 
require(__DIR__ . '/../../../vendor/autoload.php');

use ArchaeologicalStudies\helper\form\textarea;
use ArchaeologicalStudies\helper\form\input;

// form of contacts
$mail = new input(array (
    "name" => "mail",
    "type" => "mail",
    "placeholder" => "Email",
    "value" => "louis.bruge@gmail.com",
    "label" => "E.mail"
));

echo $mail->build();

$subject = new input(array (
    'name' => "subject",
    "type" => "text",
    "placeholder" => "subject",
    "value" => "Reclamation",
    "label" => "Subject"
));

echo $subject->build();


$corpus = new textarea(array (
    "name" => "louisfqdfqf",
    "placeholder" => "Namespace"
));

echo $corpus->build();
?>
