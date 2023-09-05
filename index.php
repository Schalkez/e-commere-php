<?php session_start() ?>
<?php $connect = new mySQLi("localhost", "root", "", "apt_c2010g");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <?php include "views/layout/menu-top.php" ?>
        <nav>
            <?php include "views/layout/menu-bottom.php" ?>
        </nav>
    </header>
    <section class='content'>
        <aside><?php include "views/layout/asideleft.php" ?></aside>
        <section id='main'>
            <?php include "views/layout/article.php" ?>
        </section>
        <aside><?php include "views/layout/asideright.php" ?></aside>
    </section>
    <?php include "views/layout/footer.php" ?>
</body>
</html>