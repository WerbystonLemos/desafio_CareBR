<?php

require_once("./../helpers/Conection.php");

class Nfe
{
    public function saveData($data)
    {
        $con = new Conection();
        $con->save($data);
    }

    public function getAllData()
    {
        $con = new Conection();
        return $con->all();
    }
}