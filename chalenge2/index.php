<?php
require 'coDB.php';
/*$co = new Connection; 
$co->con("becode","root","");
*/

$new = new Post("becode","root","");
$new-> findallpost("possesseur");