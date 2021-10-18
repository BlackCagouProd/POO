<?php
require './app/autoloader.php'; 
require './helper/db.php';

Autoloader::register(); 

if (isset($_GET['p']))
{
    $p = $_GET['p'];
}
else{
    $p ='home';
}



ob_start();

if ($p === 'home'){
require './view/home.php';
}elseif($p === 'actor'){
    require './view/actor.php';

}elseif($p === 'movie'){
    require './view/movie.php';

}elseif($p === 'category'){
    require './view/category.php';

}elseif($p === 'single'){
    require './view/single.php';

}elseif($p === 'customer'){
    require './view/customer.php';

}elseif($p === 'rent'){
    require './view/rent.php';
}








$content = ob_get_clean();
require './view/partial/template.php';