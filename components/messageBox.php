<?php

function messageBox($imgsrc, $groupName, $latestMessage, $date)
{?>
<div class="messages-box">
    <div class="message-box-left">
        <img src="<?=$imgsrc?>">
        <div class="message-box-left-right">
            <a href="#"><?=$groupName?></a>
            <p><?=$latestMessage?></p>
        </div>
    </div>
    <p><?=$date?></p>
</div>
</div>
<?php }?>