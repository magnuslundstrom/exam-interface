<?php
function person($person, $arrayData)
{
    foreach ($arrayData as $arrayData) {
        ?>
<div class="hashtag-group-person">
    <?php
if ($person) {
    ?>
    <img src="<?=$arrayData['img']?>" alt="image of <?=$arrayData['name']?>">
    <?php
};
        ?>
    <article>
        <p class="result-title"><?=$arrayData['name']?></p>
        <?php
if ($person) {
            ?>
        <p><?=$arrayData['description']?></p>
        <?php
}
        ?>
    </article>
</div>

<?php
}
    }
