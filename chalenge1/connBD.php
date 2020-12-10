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
    
   

}
    $co=new connexion("poo","root","");
