<?php
require_once __DIR__ . '/components/subscriptionBox.php';
$metaTitle = 'Subscriptions';
require_once __DIR__ . '/components/head.php';
require_once __DIR__ . '/components/menu.php';
menu(true, true);
?>

<div class="subscriptions-wrapper" id="subscriptions">
    <h1>Subscriptions</h1>
    <?php
subscriptionBox('Premium', ['Benefit 1', 'Benefit 2'], '39.95 DKK');
subscriptionBox('Premium Pro', ['Benefit 1', 'Benefit 2', 'Benefit 3'], '99.95 DKK');
subscriptionBox('Premium', ['Benefit 1', 'Benefit 2', 'Benefit 3'], '109.95 DKK');
?>
</div>

<?php require_once __DIR__ . '/components/footer.php'?>