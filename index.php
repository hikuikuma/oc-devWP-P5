<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>
<body>
    <?php include_once('header.php'); ?>
    <main>
        <div id="liste-oeuvres">
            <?php
                include_once('oeuvres.php');
                for ($i = 1; $i <= count($oeuvres); $i++) {
            ?>
            <article class="oeuvre">
                <a href="oeuvre.php?id=<?php echo $i; ?>">
                    <img src="img/<?php echo $oeuvres[$i]['image']; ?>" alt="<?php echo $oeuvres[$i]['titre']; ?>">
                    <h2><?php echo $oeuvres[$i]['titre']; ?></h2>
                    <p class="description"><?php echo $oeuvres[$i]['auteur']; ?></p>
                </a>
            </article>
            <?php } ?>
        </div>
    </main>
    <?php include_once('footer.php'); ?>
</body>
</html>