<?php
require_once __DIR__ . '/components/head.php';
require_once __DIR__ . '/components/menu.php';
menu(true, false, false);
?>
<main id="explore">
    <?php // require_once __DIR__ . '/components/instagramModal.php';?>
    <?php require_once __DIR__ . '/components/group-members-people.php';?>
    <div id="explore-recent">
        <section>
            <h2>Members of girls in black</h2>
            <?php
                person(true, [
                    ['name'=>'James Kirk', 'description'=>'Photographer from london', 'img'=>'https://images.unsplash.com/photo-1493863641943-9b68992a8d07?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1339&q=80']
                ]);
                person(true, [
                    ['name'=>'Loretta Absalon', 'description'=>'Happy, smile!', 'img'=>'https://images.unsplash.com/photo-1578616070222-50c4de9d5ade?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=656&q=80']
                ]);
                person(true, [
                    ['name'=>'Olivia Watson', 'description'=>'Author and nobel guy', 'img'=>'https://images.unsplash.com/photo-1504276048855-f3d60e69632f?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80']
                ]);
                person(true, [
                    ['name'=>'Emma Jay Lee', 'description'=>'Karate expert', 'img'=>'https://images.unsplash.com/photo-1529626455594-4ff0802cfb7e?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80']
                ]);
                person(true, [
                    ['name'=>'Sophia C.', 'description'=>'Photographer in Melbourne', 'img'=>'https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80']
                ]);
                person(true, [
                    ['name'=>'Basketdood321', 'description'=>'In love with basket', 'img'=>'https://images.unsplash.com/photo-1605773741569-9a72c40fc63b?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=701&q=80']
                ]);
                person(true, [
                    ['name'=>'Hatlady333', 'description'=>'Cats is my favorite pet!', 'img'=>'https://images.unsplash.com/photo-1542849902-fd6e302998a9?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1353&q=80']
                ]);
                person(true, [
                    ['name'=>'Mia Klark', 'description'=>'Wine tasting expert', 'img'=>'https://images.unsplash.com/photo-1568633782872-67d29d4615d2?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80']
                ]);
            ?>
        </section>
    </div>


</main>

<?php require_once __DIR__ . '/components/footer.php';?>