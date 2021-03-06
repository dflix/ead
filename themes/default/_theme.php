<?php 
require __DIR__ . "/../../library/autoload.php";

?>
<!doctype html>
<html lang="pt-br" itemscope itemtype="https://schema.org/WebSite">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="<?= CONF_URL_BASE ?>/_cdn/node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">
    <link href="<?= CONF_URL_BASE ?>/_cdn/css/website.css" rel="stylesheet" />
    
    <?php 
    $tag = new \Source\Controller\Tags();
  echo  $tag->tags();
    ?>
  </head>
  <body>
      <header class="container_fluid"> 
          
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-gradient">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= CONF_URL_BASE ?>">EAD HIPNOSE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= CONF_URL_BASE ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= CONF_URL_BASE ?>/blog">Blog</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cursos
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Hipnose</a></li>
            <li><a class="dropdown-item" href="#">Reiki</a></li>
            <li><a class="dropdown-item" href="#">Culinária</a></li>
           
          </ul>
        </li>
          <li class="nav-item">
          <a class="nav-link" href="<?= CONF_URL_BASE ?>/contato">Contato</a>
        </li>
        
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
      
      </header>
      
      <main class="container bg-white">
    
    <?php 
    $local = new \Source\Controller\Rota();
    
    ?>
      </main>
      
      <footer class="container_fluid bg-danger boxdisplay"> 
          
          <section class="content_footer"> 
              <header> <h3> Titulo </h3></header>
          </section>
          
          <section class="content_footer"> 
              <header> <h3> Titulo </h3></header>
          </section>
          
          <section class="content_footer"> 
              <header> <h3> Titulo </h3></header>
          </section>
      
      </footer>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    
    <script src="<?= CONF_URL_BASE ?>/_cdn/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
