<?php
function groups($hashtag, $group, $joined, $arrayData)
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
if ($hashtag) {
    ?>

    <article>
        <a href="liked-overview.php"><p class="result-title"><?=$arrayData['name']?></p></a>
        <?php
        } else {
            ?>
        <article>
        <a href="chat.php"><p class="result-title"><?=$arrayData['name']?></p></a>
        <?php}
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
    <div class="leave-btn-div btn-div">
        <button>Cancel</button>
    </div>
</div>
<?php
} else if ($group && $joined) {
            ?>
<div class="leave-btn-div btn-div">
    <a href="<?=strtolower("$string")?>leave.php"><button>Leave</button></a>
</div>
</div>
<?php

        } else if ($group && !$joined) {
            ?>
<div class="btn-div">
    <button>Join</button>
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