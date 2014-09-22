<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php require_once("includes/head.php"); ?>
</head>

<body role="document">
            <div>
            <?php require_once("includes/navbar.php"); ?>
            </div>
        <div class="page-header">
            <?php

            //Página para tratamento de rotas
                require_once(__DIR__."/engine/rotas.php");
                $getPageContent();

             ?>
        </div>
        <!-- /container -->
<footer style="background: #333333; margin: 0; padding: 0" ><?php   require_once("includes/footer.php"); ?></footer>
            <!-- Bootstrap core JavaScript
            ================================================== -->
            <!-- Placed at the end of the document so the pages load faster -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="assets/js/docs.min.js"></script>
</body>
</html>
