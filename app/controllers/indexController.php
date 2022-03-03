<?php

// VALIDA EXISTENCIA E VALIDADE DO ARQUIVO
if ( $_FILES['inptFileXml']['tmp_name'] == "" )
{
    echo json_encode( ["responseText" => "Documento inválido ou vázio."] );
    exit;
}

$pathFile   = $_FILES['inptFileXml'];
$xml        = simplexml_load_file($pathFile['tmp_name']);

// verifica se o emitente e permitido
if ( $xml->infNFe->emit->CNPJ == "09066241000884" )
{
    echo json_encode(['responseText' => 'Emitente não permitido.']);
    exit;
}

// valida protocolo de autorização
if (!isset($xml->protNFe->infProt->nProt))
{
    echo json_encode([ "responseText" =>"Sem protocolo de autenticação." ]);
    exit;
}

foreach( $xml->children() as $item )
{
    echo "<pre>";
    echo($item->emit->CNPJ);
    echo "</pre>";
    exit;
}