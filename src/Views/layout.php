<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>— Darland —</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jura&family=Tajawal:wght@700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c1d0ab37d6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style/css/style.css">
</head>

<body>
    <?php require VIEWS . "includes/header.php" ?>
    <header>
        <?= $header ?>
    </header>
    <main>
        <?= $content ?>
    </main>
    <script src="js/script.js"></script>
</body>

</html>

<?php
unset($_SESSION['error']);
unset($_SESSION['old']);
