<?php

require_once("./../helpers/Conection.php");

class Nfe
{
    public function saveData($data)
    {
        $con = new Conection();
        $con->save($data);
    }
}