<?php
class connexion
{
    private $db;   //propiété
    public function __construct($dbname,$user, $pass)
    {
        try
       {
            $this->db = new PDO("mysql:host=localhost;dbname=$dbname;charset=utf8", $user, $pass);
        }
        catch(Exception $e)
        {
            die('Error : '.$e->getMessage());
        }
    }
    
    function countTable($dbQuery){
        $query = $this->db->prepare($dbQuery);
        $query->execute();
        return $query->rowCount();
    }

}
    $co=new connexion("poo","root","");
