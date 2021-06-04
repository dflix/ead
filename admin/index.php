<?php
require '../library/autoload.php';
?>
<!doctype html>
<html lang="pt-br">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="<?= CONF_URL_BASE ?>/_cdn/node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" >
        <script src="https://kit.fontawesome.com/8670c51060.js" crossorigin="anonymous"></script>
        <link href="<?= CONF_URL_BASE ?>/_cdn/css/admin.css" rel="stylesheet" />
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> 

        <link href="css/style.css" rel="stylesheet" />
        <title>Área Administrativa</title>
    </head>
    <body>


        <main class="container-fluid"> 

            <div class="row"> 

                <section class="col-md-2"> 
                    <?php
                    include './nav.php';
                    ?>    
                </section>

                <section class="col-md-10"> 

                    <nav class="navbar navbar-expand-lg"> </nav>

                    <?php
                    if (empty($_GET["p"])) {
                        include "./inc/home.php";
                    } else {
                        include "./inc/{$_GET["p"]}.php";
                    }
                    ?>

                </section>


            </div>


        </main>

        <!-- Optional JavaScript; choose one of the two! -->
        
        <script src="<?= CONF_URL_BASE ?>/_cdn/js/jquery-3.6.0.min.js"></script>
        <!-- Option 1: Bootstrap Bundle with Popper -->
        
        <script src="<?= CONF_URL_BASE ?>/_cdn/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.js"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
        -->
    </body>
</html>

