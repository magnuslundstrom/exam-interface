<?php

function subscriptionBox($title, $benefits, $price)
{?>
<div class="subscription-box">
    <h3 class="subscription-box-title"><?=$title?></h3>
    <?php foreach ($benefits as $benefit) {?>
    <p class="subscription-box-benefit"><?=$benefit?></p>
    <?php }?>
    <div class="subscription-box-lower">
        <p class="subscription-box-price"><?=$price?></p>
        <button class="subscription-box-sub-btn">Subscribe</button>
    </div>
</div>
<?php }?>