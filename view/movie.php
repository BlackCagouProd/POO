<?php
$movie = new film($film_id='',$title='',$descritpion='',$release_year='',$language_id='',$original_language_id='',$rental_duration='',$length='',$replacement_cost='',$special_features='',$last_update='');
?>

<div class="container">
    <?php foreach ($movie->findAll() as $data) : ?>
        
        <div class="neuro">
            <i class="fas fa-film"></i>
            <p><?= $data->title ?> </p>
            <!-- <p> <?= $data->description?></p> -->
            <em>Durée du film : <?= $data->length ?> minutes</em>
            <a class='link' href="index.php?p=single&film_id=<?= $data->film_id;?>"><i class="fas fa-plus"></i></a>
        </div>
        
    <?php endforeach; ?>
</div>