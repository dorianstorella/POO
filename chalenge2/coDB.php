<?php 
class connexion {
    public static function db($dbname, $user , $pass)
    {
        try
       {
            $this->conn = new PDO("mysql:host=localhost;dbname=$dbname;charset=utf8", $user, $pass);
            echo 'co reussie';
        }
        catch(Exception $e)
        {
            die('Error : '.$e->getMessage());
        }
    }
    }
}
class post 
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

    public function findAllPost()
    {
        
    }
}