<?php

require_once("./../helpers/Conection.php");

class Nfe
{
    public function saveData($data)
    {
        $con = new Conection();
        $con->save($data);
        // echo json_encode(["response" => "Salvarei em BD seus dados"]);
    }
}