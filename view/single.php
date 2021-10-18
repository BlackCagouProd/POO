<?php  
$movie = new film($film_id='',$title='',$descritpion='',$release_year='',$language_id='',$original_language_id='',$rental_duration='',$length='',$replacement_cost='',$special_features='',$last_update='');
$data = $movie->findOne($film_id);

?>



    <div class="single">
        <i class="fas fa-film"></i>
        <h3><?= $data->title?> </h3>
        <div><h5>sorti en :</h5><?= $data->release_year ?></div>
        <div><h5>description:</h5><?= $data->description ?></div>
        <em><h5>Durée du film : </h5><?= $data->length ?> minutes</em>
        <div>
        <form action="" methodo='POST'>
            <button href="index.php?p=single&film_id=<?= $data->film_id;?>" class="btn btn-success float-right">loué</button>
            <button class="btn btn-warning float-right">rendre</button>
        </form>
        </div>
        
        
    </div>
    
