<?php 
class Connexion 
{
    private $id_post;
    private $title_post;
    private $content_post;
    private $conn;  
    public function __construct($dbname, $user , $pass)
    {
        try
       {
            $this->con = new PDO("mysql:host=localhost;dbname=$dbname;charset=utf8", $user, $pass);
            echo 'co reussie';
        }
        catch(Exception $e)
        {
            die('Error : '.$e->getMessage());
        }
    }
    

    
    
    public function addPost($post, $id_post)
    {
       $stmt = $this->conn->prepare("SELECT INTO jeux_video($id_post) values ($post)");
       $stmt ->excute();      
       return $this->stmt;
    }

    public function removePoste()
    {

    }

    public function findAllPost()
    {

    }


}