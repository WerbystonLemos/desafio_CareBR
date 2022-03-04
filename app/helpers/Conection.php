<?php

class Conection
{
    private $dbname = "bd_care";
    private $host   = "localhost";
    private $user   = "root";
    private $pass   = "";
    private $pdo;

    private function toConect()
    {
        try
        {
            $this->pdo = new PDO("mysql:dbname=$this->dbname;host:=$this->host", $this->user, $this->pass);
        }
        catch (\Throwable $th)
        {
            echo "Erro ao conecatar com banco de dados. \nErro: $th->getMessage()";
        }
    }

    public function getData()
    {
        $res = $this->pdo->prepare("SELECT id, cNF, dhEmi, CPF, xNome, email, CEP, bairro, xMun, UF, cPais, vNF FROM nfs");
        return $res->execute();
    }
    
    public function save($data)
    {
        $this->toConect();
        $cNF    = $data['cNF'];
        $dhEmi  = (String) $data['dhEmi'];
        $dhEmi  = substr($dhEmi, 0, -15);
        $CPF    = $data['CPF'];
        $xNome  = $data['xNome'];
        $email  = $data['email'];
        $CEP    = $data['CEP'];
        $bairro = $data['bairro '];
        $xMun   = $data['xMun '];
        $UF     = $data['UF '];
        $cPais  = $data['cPais'];
        $vNF    = $data['vNF'];

        // $res = $this->pdo->prepare("INSERT INTO nfs(cNF, dhEmi, CPF, xNome, email, CEP, bairro, xMun, UF, cPais, vNF) VALUES( $cNF, $dhEmi, $CPF, $xNome, $email, $CEP, $bairro, $xMun, $UF, $cPais, $vNF)");
        
        $res = $this->pdo->prepare("INSERT INTO nfs(cNF, dhEmi, CPF, xNome, email, CEP, bairro, xMun, UF, cPais, vNF) VALUES( :a, :b, :c, :d, :e, :f, :g, :h, :i, :j, :k)");
        $res->bindValue(":a", $cNF);
        $res->bindValue(":b", $dhEmi);
        $res->bindValue(":c", $CPF);
        $res->bindValue(":d", $xNome);
        $res->bindValue(":e", $email);
        $res->bindValue(":f", $CEP);
        $res->bindValue(":g", $bairro);
        $res->bindValue(":h", $xMun);
        $res->bindValue(":i", $UF);
        $res->bindValue(":j", $cPais);
        $res->bindValue(":k", $vNF);
        echo $res->execute();
    }
}