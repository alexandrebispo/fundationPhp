<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php require_once("includes/head.php"); ?>
</head>

<body role="document">
<!-- Fixed navbar -->
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <?php require_once("includes/navbar.php"); ?>
        </div><!--/.nav-collapse -->
    </div>
</div>

        <div class="page-header">
                <?php

                if(isset($_GET['pagina']) && file_exists('includes/'.$_GET['pagina'])):
                    require_once('includes/'.$_GET['pagina']);
                else:   ?>
                    <div class="alert alert-danger" role="alert">
                        <strong>Aviso!</strong> esta página não existe.
                    </div>

               <?php
                    require_once("includes/home.php");
               endif;

               ?>
        </div>
    </div> <!-- /container -->
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="assets/js/docs.min.js"></script>
</body>
</html>
