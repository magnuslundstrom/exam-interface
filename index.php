<!DOCTYPE html>
<html lang="en">

<?php
$metaTitle = 'Sign up to iHub';
require_once __DIR__ . '/components/head.php';
require_once __DIR__ . '/components/menu.php';
menu();
?>




<main class="index-main">
    <section id="signup-box">
        <section class="signup-login-box">
            <section class="auth-form">
                <h1>Signup</h1>
                <form onsubmit="validate(); return false;">
                    <input name="email" type="text" placeholder="Email" value="" data-type="email">
                    <input name="password" type="password" placeholder="Password" value="" data-type="string" data-min="2" data-max="20">
                    <button class="signup-button">Sign up</button>
                </form>
                
            </section>
        </section>
        <section class="switch-box">
                <div>Already have an account? <button class="switch-button" onclick="showLogin();return false;">Login!</button></div>
        </section>
    </section>
    <section id="login-box" class="hidden">
        <section class="signup-login-box">
            <section class="auth-form">
                <h1>Login</h1>
                <form onsubmit="validate(); return false;">
                    <input name="email" type="text" placeholder="Email" value="" data-type="email">
                    <input name="password" type="password" placeholder="Password" value="" data-type="string" data-min="2" data-max="20">
                    <button class="signup-button">Sign up</button>
                    <a href="#">Forgot password?</a>
                </form>
                
            </section>
        </section>
        <section class="switch-box">
                <div>Dont have an account yet? <a id="myLink" href="#" onclick="switchFunction(showSignup);return false;">Signup!</a></div>
        </section>
    </section>
</main>
<script src="/js/login.js"></script>
<?php require_once __DIR__ . '/components/footer.php';?>