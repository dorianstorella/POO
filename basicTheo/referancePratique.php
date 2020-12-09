<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <h2>exemple un cree une classe et un objet</h2>   
<?php 
// Creation d'une classe et manipulation 
class exemple    //commence majuscule
{
    private $_force;        //CREATION attribut
    private $_localisation;
    private $_experiance;
    private $_degat;

    public function deplace(){      //CREATION METHODE
        
    }
    public function frapper(){

    }
    public function parler(){
        echo 'je suis un personnage';
    }
}
    $ex =new exemple;  //CREATION OBJET
    $ex->parler();     // APPEL METHODE 
?>

<br>
<h2>acceder a un element depuis la classe </h2>
<?php


class Personnages   //commence majuscule
{
    private $_force=20;
    private $_localisation;
    private $_experience = 0;
    private $_degat=0;
    
    public function gagnerExp(){
        $this->_experience = $this->_experience + 1;
    }
    public function afficheExp(){
        echo $this->_experience;      // ici on a la pseudo variable this->  //permet d acceder au attribut de l objet au quel il est appele
    }
    public function frapper($xx){
        $xx->_degat += $this->_force;     
    }
}


$LeRoiFou= new Personnages;   //cree un nouvel objet 
$LeRoiFou->afficheExp();      //affiche _experiance de $LeRoiFou 
$LeRoiFou->gagnerExp();      // appelle la fonction gagnerExp() ET rajoute 1 a  _experiance de $LeRoiFou 

$LeRoiFou->afficheExp();    
?>

<h2>implementer d autre methode</h2>
<?php 

$persoMage = new Personnages;
$persoGuerrier = new Personnages;

//$persomage doit frapper $persoguerrier 

$persoMage->frapper($persoGuerrier);
$persoMage->gagnerExp();
?>

</body>
</html>