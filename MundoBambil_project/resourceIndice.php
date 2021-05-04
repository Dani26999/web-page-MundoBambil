<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>MundoBambil</title>
        <link rel="stylesheet" type="text/css" href="estilo30.css">
        <script src="jq/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="recursos5.js"></script>
    </head>
    <body>
        <header>
            <?php
            include_once __DIR__."/controllers/controladorHeader.php";
            ?>
        </header>
        <nav>
            <?php
            include_once __DIR__."/controllers/controladorMenu.php";
            ?>
        </nav>
        <div class="main">
            <?php include __DIR__."/controllers/controladorPortada.php"; ?>
        </div>


        <footer>
            <?php include_once __DIR__."/controllers/controladorPie.php"; ?>
        </footer>

    </body>
</html>