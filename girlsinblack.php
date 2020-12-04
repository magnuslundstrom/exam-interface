<?php
require_once __DIR__ . '/components/head.php';
require_once __DIR__ . '/components/menu.php';
menu(true, true, false);
?>

<main id="group">
    <section class="group">
    <img src="https://images.unsplash.com/photo-1568633782872-67d29d4615d2?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
    alt="Image of Girls in black">
    <h2>Girls in Black</h2>
    <p class="free">Free</p>
    <i class="fas fa-user"></i><span>7.501</span>
    <p class="description">the black movement is all about making beautiful clothes with black colors‍</p>
    <p class="pinpoints">‍👉 Only for nice people</p>
    <p class="pinpoints">‍👉 Free for girls</p>
    <p class="pinpoints">‍🎤 Music lovers</p>
    <div id="join" class="join-btn"><button type="button" class="join-button" onclick="toggleJoin();">Join</button></div>
    <div id="pending" class="join-btn hidden"><button type="button" class="pending-button">Pending</button>
    <button type="button" class="pending-link" onclick="toggleJoin();">Cancel</button>
    </div>
    </section>

</main>
<script>
    const joinBox = document.getElementById('join');
const pendingBox = document.getElementById('pending');

function toggleJoin() {
    joinBox.classList.toggle('hidden');
    pendingBox.classList.toggle('hidden');
}
</script>
<?php require_once __DIR__ . '/components/footer.php';?>