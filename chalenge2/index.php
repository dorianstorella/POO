<?php
require 'coDB.php';
$co = new Connexion("becode","root",""); 
echo $co->addPost("marcel","nom");