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
            <h2>Groups</h2>
            <?php
                groups(false, true, true, [
                    ['name'=>'Fun group', 'members'=>'10,021', 'description'=>'Fun group for fun people', 'img'=>'https://pbs.twimg.com/profile_images/1317598023032074241/wspprjSM_400x400.jpg']
                ]);
                groups(false, true, true, [
                    ['name'=>'Car group', 'members'=>'231', 'description'=>'Crazy car group', 'img'=>'https://pbs.twimg.com/profile_images/1319286075974545408/svZerS-Y_400x400.jpg']
                ]);
                groups(false, true, true, [
                    ['name'=>'Girls in black', 'members'=>'7.501', 'description'=>'the black movement is all about making beautiful clothes with black colors', 'img'=>'https://images.unsplash.com/photo-1568633782872-67d29d4615d2?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80']
                ]);
            ?>
        </section>
    </div>


</main>

<?php require_once __DIR__ . '/components/footer.php';?>