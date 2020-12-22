<?php
$badword = $_GET['badword'];

$paragraph = "Oggi sono caduto per le scale ed oltre ad invocare divinità ho esclamato, cavolo!";

$msgOutput = str_replace($badword,"***",$paragraph);



echo $msgOutput;
echo "Il paragrafo è lungo" . strlen($paragraph)." caratteri";