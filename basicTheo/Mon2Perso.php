<?php
class Mon2perso 
{
    private $degats;
    private $experience;
    private $force;

    public function __construct($degats,$force)
    {
        echo 'LA fonction fonctionne de monperso guerrier';
        $this->setdegats($degats);
        $this->setforce($force);
    }
    public function setdegats($degats)
    {
        if (!is_int($degats)){
            trigger_error('NAN', E_USE_WARNING);
            return;
        }
        if ($degats > 100){
            trigger_error('the force cant hight over 100', E_USER_WARNING);
            return;
        }
        $this->degats = $degats;
    } 
    public function setforce($force)
    {
        if (!is_int($force)){
            trigger_error('NAN', E_USER_WARNING);
            return;
        }
        if ($force > 100){
            trigger_error('the force cant over 100', E_USER_WARNING);
            return;
        }
        $this->force= $force;
    }
}