<?php
function hashtagGroupPerson($hashtag, $group, $paid, $arrayData)
{
    foreach ($arrayData as $arrayData) {
        $string = $arrayData['name'];
        $string = preg_replace("/[\W_]+/u", '', $string);
        ?>
<div class="hashtag-group-person">
    <?php
if ($hashtag) {
            ?>
    <div>
        <img src="<?=$arrayData['img']?>" alt="image of <?=$arrayData['name']?>">
        <i class="fas fa-hashtag"></i>
    </div>
    <?php
} else {
            ?>
    <img src="<?=$arrayData['img']?>" alt="image of <?=$arrayData['name']?>">
    <?php
}
        ?>
    <article>
        <p class="result-title"><?=$arrayData['name']?></p>
        <?php
if (!$hashtag) {
            ?>
        <p><?=$arrayData['description']?></p>
        <?php
}
        ?>
        <?php
if ($hashtag || $group) {
            ?>
        <i class="fas fa-user"></i><span> <?=$arrayData['members']?></span>
        <?php
}
        ?>
    </article>
    <?php
if ($hashtag) {
            ?>
    <div class="btn-div">
        <a href="<?=strtolower("$string")?>.php"><button>Automate</button></a>
    </div>
</div>
<?php
} else if ($group && $paid) {
            ?>
<div class="btn-div">
    <a href="<?=strtolower("$string")?>.php"><button>Join</button></a>
    <p>Paid</p>
</div>
</div>
<?php

        } else if ($group && !$paid) {
            ?>
<div class="btn-div">
    <a href="<?=strtolower("$string")?>.php"><button>Join</button></a>
    <p class="paid-group">Free</p>
</div>
</div>
<?php
} else {
            ?>
</div>
<?php
}
    }
}