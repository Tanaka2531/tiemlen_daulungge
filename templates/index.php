<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>tiem len dau lung ge</title>

        <?php include TEMPLATES . LAYOUTS . "css.php"; ?>
    </head>

    <body>
        <div class="body-container">
            <header id="header-primary">
                <?php include TEMPLATES . LAYOUTS . "navigation.php"; ?>
            </header>
            <div id="body-content">
                <main id="main-primary">
                    <?php include TEMPLATES . LAYOUTS . "slide.php"; ?>
                    <hr class="index-separator" size="60">
                    <article id="article-primary">
                        <?php include TEMPLATES . INDEX . "index.php"; ?>

                    </article>
                </main>
            </div>
            <footer id="footer-primary">
                <?php include TEMPLATES . LAYOUTS . "footer.php"; ?>
            </footer>
        </div>
        <?php include TEMPLATES . LAYOUTS . "js.php"; ?>
    </body>

</html>