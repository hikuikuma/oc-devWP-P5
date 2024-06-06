<?php
    include_once('oeuvres.php');
    if( isset($_GET['id']) && array_key_exists($_GET['id'], $oeuvres) ) {
        $id = $_GET['id'];
    } else {
        header('Location: index.php');
    }
?>

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

    <article id="detail-oeuvre">
        <div id="img-oeuvre">
            <img src="img/<?php echo $oeuvres[$id]['image']; ?>" alt="<?php echo $oeuvres[$id]['titre']; ?>">
        </div>
        <div id="contenu-oeuvre">
            <h1><?php echo $oeuvres[$id]['titre']; ?></h1>
            <p class="description"><?php echo $oeuvres[$id]['auteur']; ?></p>
            <p class="description-complete">
                <?php echo $oeuvres[$id]['description']; ?>
            </p>
        </div>
    </article>
</main>
<?php include_once('footer.php'); ?>
</body>
</html>