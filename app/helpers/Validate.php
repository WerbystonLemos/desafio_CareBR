<?php

class Validate
{
    // VALIDA EXTENSAO DO ARQUIVO
    public function validateExtension($fileType)
    {
        if ( $fileType != "text/xml" )
        {
            echo json_encode( ["responseText" => "Documento inválido."] );
            exit;
        }
    }
    
    // VALIDA EXISTENCIA E VALIDADE DO ARQUIVO
    public function validateExist($fileName)
    {
        if ( $fileName == "" )
        {
            echo json_encode( ["responseText" => "Documento vázio."] );
            exit;
        }
    }
    
    // VERIFICA PERMISSAO DO EMITENTE
    public function validateEmitent($cpf)
    {
        if ( $cpf != "09066241000884" )
        {
            echo json_encode(['responseText' => "Emitente $cpf sem permissão ou não identificado."]);
            exit;
        }
    }

    // VALIDA PROTOCOLO DE AUTENTICACAO
    public function validateProtocolAuthenticate($numProtocol)
    {
        if ( $numProtocol == null)
        {
            echo json_encode([ "responseText" =>"Sem protocolo de autenticação." ]);
            exit;
        }
    }
}