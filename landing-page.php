<?php
require_once __DIR__ . '/components/head.php';
require_once __DIR__ . '/components/hashtag-group-person.php';
require_once __DIR__ . '/components/menu.php';
require_once __DIR__ . '/components/instagramModal.php';
menu(true, true, false);
?>



<main class="landing-main">
    <section>
        <h2>Suggested hashtags</h2>
        <?php

hashtagGroupPerson(true, false, false, [
    ['name' => 'fashionweek', 'members' => '103.213', 'img' => 'https://pbs.twimg.com/profile_images/1301935188684025856/81FCoiJ2_400x400.jpg'],
    ['name' => 'streetfashion', 'members' => '68.074', 'img' => 'https://pbs.twimg.com/profile_images/1278121753554964480/e_Fcl_4q_400x400.jpg'],
    ['name' => 'style', 'members' => '293.951', 'img' => 'https://pbs.twimg.com/profile_images/1088438336488947712/Tvqi6h0A_400x400.jpg'],
])
?>

    </section>

    <section class="landing-messages">
        <h2>New messages</h2>
        <div>
            <a href="chat.php">
                <img src="https://pbs.twimg.com/profile_images/1080545769034108928/CEzHCTpI_400x400.jpg"
                    alt="image of @catLover999">
                <div>
                    <p>@catLover999</p>
                    <p>So I got this new cat</p>
                </div>
            </a>
            <a href="chat.php">
                <img src="https://images.unsplash.com/photo-1561709511-cf135c069ed6?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                    alt="image of @staartingsoon">
                <div>
                    <p>@staartingsoon</p>
                    <p>How are you long time no s...</p>
                </div>
            </a>
            <a href="chat.php">
                <img src="https://pbs.twimg.com/profile_images/1027113206605643776/YOZiaA9u_400x400.jpg"
                    alt="image of @FashionNova:">
                <div>
                    <p>@FashionNova</p>
                    <p>OMG *Queen*!!👑👏</p>
                </div>
                </a">
        </div>
        <a class="landing-btn" href="messages.php">See all<i class="fas fa-angle-right"></i></a>
    </section>

    <section class="landing-messages">
        <h2>Automation status</h2>
        <div>
            <a href="automation.php">
                <div>
                    <p>All new posts in #cats were successfully liked</p>
                    <p>Likes: 22</p>
                </div>
            </a>
            <a href="automation.php">
                <div>
                    <p>Encountered an error when liking #monkaS.</p>
                    <p>Trying again in 19 minutes</p>
                </div>
            </a>
            <a href="automation.php">
                <div>
                    <p>All new posts in #cats were successfully liked</p>
                    <p>Likes: 31</p>
                </div>
            </a>
        </div>
        <a class="landing-btn" href="messages.php">Manage<i class="fas fa-angle-right"></i></a>
    </section>
</main>
<?php require_once __DIR__ . '/components/footer.php';?>