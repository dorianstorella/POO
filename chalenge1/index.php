<?php 
require 'connBD.php';
$co=new connexion("poo","root","");
echo $co->countTable("SELECT * FROM user");
?>
