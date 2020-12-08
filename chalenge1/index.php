<?php 
/*$servername = "localhost";
$username = "root";
$password = "";


try {
    $db = new PDO("mysql:host=$servername;dbname=poo;charset=utf8", $username, $password);
    //setting the PDO error mod to exception
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE POO";
    //using exec() because noresul are returned
    $db ->exec($sql);
    echo "database created successfulle whith the name POO";
} 
catch(PDOExeption $e){
    echo $sql . "
    ". $e->getMessage();
}
$db=null;
*/


class ConnPDO{
    public $servername ="localhost";    // propriete
    public $datadase="poo";
    public $username ="root";
    public $password="";
       
    function connection($servername,$datadase,$usernamer,$password){ //methode  
        $db = new PDO("mysql:host=$this->$servername;dbname=poo;charset=utf8", $this->$username, $this->$password);  
}
}
?>
