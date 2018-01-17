<?php 
require(__DIR__ . '/../vendor/autoload.php');

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

$subject = new input(array (
    'name' => "subject",
    "type" => "text",
    "placeholder" => "subject",
    "value" => "Reclamation",
    "label" => "Subject"
));

$corpus = new textarea(array (
    "name" => "louisfqdfqf",
    "placeholder" => "Namespace",
    "value" => "Write your message here!"
));

$submit = new input(array (
    "name" => "submit",
    "type" => "submit",
    "value" => "Submit"
));

echo '<p>';
echo $mail->build();
echo $subject->build();
echo $corpus->build();
echo $submit->build();
echo '</p>';
?>
