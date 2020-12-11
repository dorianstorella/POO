<?php 
class Connection 
{
     
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
    
    public function __construct($id){
        $this ->id_post = $id;
       
    } 
    
    public function addPost()
    {   
      
        $co = Connection::con("becode", "root" , ""); 
        $stmt = $co->prepare("INSERT INTO jeux_video (possesseur) values (:post)");
        $stmt->bindParam(':post',$this->id_post);
        echo $stmt->execute();
        
    }

    public function removePoste()
    {

    }

    public function findAllPost()
    {

    }
    function getid()
    {
        return $this->id_post;
    }
}