<?php

$pathFile = $_FILES['inptFileXml'];
// echo "<pre>";
// print_r( $pathFile ); 
// echo "</pre>";

$xml = simplexml_load_file($pathFile['tmp_name']);

echo gettype($xml);
// exit;

foreach( $xml->children() as $item )
{
    echo "<pre>";
    var_dump($item);
    echo "</pre>";
}