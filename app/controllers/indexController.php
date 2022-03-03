<?php

// VALIDA EXISTENCIA E VALIDADE DO ARQUIVO
if ( $_FILES['inptFileXml']['tmp_name'] == "" )
{
    echo json_encode( ["responseText" => "Documento inválido ou vázio."] );
    exit;
}

$pathFile = $_FILES['inptFileXml'];    

// echo "<pre>";
// print_r( $pathFile ); 
// echo "</pre>";
// exit;

$xml = simplexml_load_file($pathFile['tmp_name']);

// echo gettype($xml);
// exit;

foreach( $xml->children() as $item )
{
    echo "<pre>";
    var_dump($item);
    echo "</pre>";
}