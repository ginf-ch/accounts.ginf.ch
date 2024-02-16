<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>JetBrains Account-Registrierung | accounts.ginf.ch</title>
    <?php
    include("head.php");
    ?>
</head>
<body>
<header>
    <?php
    include("header.html");
    ?>
</header>
<main>
    <?php
    include("edu.php");
    $title = "Authorization";
    $href = "https://xkcd.com/1200/";
    $src = "https://imgs.xkcd.com/comics/authorization.png";
    $alt = "xkcd_authorization";
    $imgTitle = "Before you say anything, no, I know not to leave my computer sitting out logged in to all my accounts. I have it set up so after a few minutes of inactivity it automatically switches to my brother's.";
    include("comics.php");
    ?>
</main>
<footer class="footer">
    <?php
    include("footer.php");
    ?>
</footer>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<?php
include("modal_images.php");
?>
</body>
</html>