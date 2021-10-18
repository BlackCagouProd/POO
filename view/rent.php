<?php

$listrental = new rental($rental_id='',$customer_id='');
$listrental->findAll();


//var_export ($listrental);
?>
<div class ="container">
    <?php foreach ($listrental->findAll() as $data) : ?>

        <div class="neuro">
            <i class="fas fa-user"></i><br>
            <p><?= $data->rental_id?> </p>
            <p><?= $data->first_name?> <?= $data->last_name?></p>
            
        </div>
        
    <?php endforeach; ?>
</div>