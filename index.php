<?php
$metaTitle = 'Sign up to iHub';
require_once __DIR__ . '/components/head.php';
require_once __DIR__ . '/components/menu.php';
menu();
?>





<section class="auth-form">
    <h1>Adam's branch</h1>
    <form>
        <input type="text" placeholder="Email" />
        <input type="password" placeholder="Password" />
        <button>Sign up</button>
    </form>
    <div>Already have an account? <a href="login.html">Log in!</a></div>
</section>

<?php require_once __DIR__ . '/components/footer.php';?>