<?php

$listActor = new actor($actor_id='',$first_name='',$last_name='');
$listActor->findAll();


//var_export ($listActor);
?>
<div class ="container">
    <?php foreach ($listActor->findAll() as $data) : ?>

        <div class="neuro">
            <i class="fas fa-user"></i><br>
            <p><?= $data->first_name ?> </p>
            <p><?= $data->last_name?></p>
            
        </div>
        
    <?php endforeach; ?>
</div>