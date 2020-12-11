<?php 
class Connection 
{
    private $dbname;
    private $user;
    private $pass;  
    public static function con($dbname, $user , $pass)
    {
        try
       {
           $connect = new PDO("mysql:host=localhost;dbname=$dbname;charset=utf8", $user, $pass);
            echo 'co reussie';
        }
        catch(Exception $e)
        {
            die('Error : '.$e->getMessage());
        }
    }
    
}
 

class Post 
{
    private $id_post;
    private $title_post;
    private $content_post;
    
    
    public function addPost()
    {   
      
        
       
    }

    public function removePoste()
    {

    }

    public function findAllPost($id_post)
    {
        $co = Connection::con("becode", "root" , ""); 
       
        $stmt= $co->prepare("SELECT (possesseur) FROM (jeux_video)");
        $stmt->execute();
    }
    function getid()
    {
        return $this->stmt;
    }
}