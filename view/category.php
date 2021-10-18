<?php

$categories = new category($category_id='',$name='');
$categories->findAll();


//var_export ($categories);
?>

<div class="container">
    <?php foreach ($categories->findAll() as $data) : ?>

        
        <div class="neuro">
            <i class="fas fa-bookmark"></i><br>
            <strong><?= $data->name ?></strong>      
        </div>

    <?php endforeach; ?>
</div>