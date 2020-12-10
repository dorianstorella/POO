<?php
class connexion
{
    private $conn;   //propiété
    public function __construct($dbname,$user, $pass)
    {
        try
       {
            $this->conn = new PDO("mysql:host=localhost;dbname=$dbname;charset=utf8", $user, $pass);
        }
        catch(Exception $e)
        {
            die('Error : '.$e->getMessage());
        }
    }
    public function countTable($dbQUERY)
    {
        $stmt = $this->conn->prepare($dbQUERY);
        $stmt->exec();
        return $stmt->rowCount();

    }
   

}
    $co=new connexion("poo","root","");
