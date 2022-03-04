<?php

require('./../helpers/Validate.php');
require('./../model/Nfe.php');

$pathFile = $_FILES['inptFileXml'];
// INSTANCES
$validate = new Validate();
$nf       = new Nfe();

$validate->validateExist( $pathFile['tmp_name'] ); // VALIDA EXISTENCIA E VALIDADE DO ARQUIVO
$xml      = simplexml_load_file($pathFile['tmp_name']);

// ATTRIBUTES
$cnpjEmitent;
isset( $xml->NFe->infNFe->emit->CNPJ ) ? $cnpjEmitent = $xml->NFe->infNFe->emit->CNPJ : $cnpjEmitent = null; 
$protocoloAuthenticate;
isset( $xml->protNFe->infProt->nProt ) ? $protocoloAuthenticate = $xml->protNFe->infProt->nProt : $protocoloAuthenticate = null;

$validate->validateEmitent( $cnpjEmitent ); // VERIFICAR SE O EMITENTE E PERMITIDO
$validate->validateProtocolAuthenticate( $protocoloAuthenticate ); // VALIDA PROTOCOLO DE AUTENTICACAO

$dados = [];
$dados['cNF']       = $xml->NFe->infNFe->ide->cNF;
$dados['dhEmi']     = $xml->NFe->infNFe->ide->dhEmi;
$dados['CPF']       = isset($xml->NFe->infNFe->dest->CPF) ? $xml->NFe->infNFe->dest->CPF : "" ;
$dados['xNome']     = isset($xml->NFe->infNFe->dest->xNome) ? $xml->NFe->infNFe->dest->xNome : "" ;
$dados['email']     = isset($xml->NFe->infNFe->dest->email) ? $xml->NFe->infNFe->dest->email : "" ;
$dados['CEP']       = isset($xml->NFe->infNFe->dest->enderDest->CEP) ? $xml->NFe->infNFe->dest->enderDest->CEP : ""  ;
$dados['bairro ']   = isset($xml->NFe->infNFe->dest->enderDest->xBairro) ? $xml->NFe->infNFe->dest->enderDest->xBairro : ""  ;
$dados['xMun ']     = isset($xml->NFe->infNFe->dest->enderDest->xMun) ? $xml->NFe->infNFe->dest->enderDest->xMun : ""  ;
$dados['UF ']       = isset($xml->NFe->infNFe->dest->enderDest->UF) ? $xml->NFe->infNFe->dest->enderDest->UF : ""  ;
$dados['cPais']     = isset($xml->NFe->infNFe->dest->enderDest->cPais) ? $xml->NFe->infNFe->dest->enderDest->cPais : ""  ;
$dados['vNF']  = $xml->NFe->infNFe->total->ICMSTot->vNF;
$nf->saveData($dados);