<?php 
class Connection 
{
    private $db;
    
    public function __construct($dbname, $user , $pass)
    {
        try
       {
           $this->db= new PDO("mysql:host=localhost;dbname=$dbname;charset=utf8", $user, $pass);
            echo 'co reussie';
        }
        catch(Exception $e)
        {
            die('Error : '.$e->getMessage());
        }
    }
        static function connect($dbname, $user,$pass)
        {
            return new PDO("mysql:host=localhost;dbname=$dbname;charset=utf8", $user, $pass);
        }
}
 

class Post 
{
    private $id_post=null;
    private $title_post;
    private $content_post;
    
    public function __construct($id,$title,$content)
    {
        $this->id_post = $id;
        $this->title_post = $title;
        $this->content_post = $content;
    }

    public function addPost()
    {   
        $connect = Connection::connect("poo","root","");
        $stmt = $connect->prepare("INSERT INTO clients VALUES (NULL, :post, :content)");
        $stmt->bindParam(':post', $this->title_post);
        $stmt->bindParam(':content', $this->content_post);
        echo $stmt->execute();
    }

    static function removePost($id)
    {
        $connect = Connection::connect("poo","root","");
        $stmt = $connect->prepare("DELETE FROM clients WHERE id_post=".$id);
        $stmt->execute();
    }

    static function findAllPost()
    {
        $allPost = [];
        $connect = Connection::connect("poo", "root" , ""); 
        $stmt= $connect->prepare("SELECT * FROM clients");
        $stmt->execute();
        while($fetch = $stmt->fetch())
        {
            $allPost[] = new Post($fetch['id'],$fetch['firstname'],$fetch['secondname']);
        }
        return $allPost;
    }
    
    function getId()
    {
        return $this->id_post;
    }
    

    function getTitle()
    {
        return $this->title_post;
    }
    

    function getContent()
    {
        return $this->content_post;  
    }
}
?>
