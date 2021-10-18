<?php

$listcustomer = new customer($customer_id='',$first_name='',$last_name='',$email='',$active='');
$listcustomer->findAll();


//var_export ($listcustomer);
?>
<div class ="container">
    <?php foreach ($listcustomer->findAll() as $data) : ?>

        <div class="neuro">
            <i class="fas fa-user"></i><br>
            <p><?= $data->first_name ?> </p>
            <p><?= $data->last_name?></p>
            <p><?= $data->email?></p>
            
        </div>
        
    <?php endforeach; ?>
</div>