<?php
require_once __DIR__ . '/components/head.php';
require_once __DIR__ . '/components/menu.php';
menu(true, true, false);
?>

<main id="explore">
    <?php // require_once __DIR__ . '/components/instagramModal.php';?>
    <?php require_once __DIR__ . '/components/groups.php';?>
    <div id="explore-recent">
        <section>
            <h2>Automations</h2>
            <?php
                groups(true, true, true, [
                    ['name'=>'#girstyles', 'members'=>'10,648', 'img'=>'https://images.unsplash.com/photo-1465145782865-09532f760e6b?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80']
                ]);
                groups(true, true, true, [
                    ['name'=>'#colors', 'members'=>'11.832', 'img'=>'https://images.unsplash.com/photo-1464820453369-31d2c0b651af?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80']
                ]);
                groups(true, true, true, [
                    ['name'=>'#candy', 'members'=>'712', 'img'=>'https://images.unsplash.com/photo-1499195333224-3ce974eecb47?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1248&q=80']
                ]);
            ?>
        </section>
        <div class="premium-box">
            <p>Want more automations? check out our</p>
            <a href="subscriptions.php">Premium Version</a>
        </div>
    </div>


</main>

<?php require_once __DIR__ . '/components/footer.php';?>