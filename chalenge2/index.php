<?php
require 'coDB.php';
/*$co = new Connection; 
$co->con("becode","root","");
*/
if (isset($_POST['id'])){
$new = new Post($_POST['id']);
$new->addPost();
}
