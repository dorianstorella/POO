<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>auto-chargement de classe</h2>
    <?php 
    //require 'Mon2perso.php';
   
    
    function chargerClasse($perso)
    {
        require $perso . '.php';        
    }    
    spl_autoload_register('chargerClasse');
    $mage = new Monperso (30,30);
    $guerrier = new Mon2perso(40,40);
    ?>
</body>
</html>