<?php

session_start();


if(!isset($_SESSION['user'])){

    header("location: permission_denied.php");
}else{  


?>

<!DOCTYPE html>
<!-- saved from url=(0057)https://getbootstrap.com/docs/5.1/examples/navbar-bottom/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Bottom navbar example · Bootstrap v5.1</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/navbar-bottom/">

    

    <!-- Bootstrap core CSS -->
<link href="../frontend/Bottom navbar example · Bootstrap v5.1_files/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
  </head>
  <body>
    
<main class="container">
  <div class="bg-light p-5 rounded mt-3">
    <h1>Bottom Navbar example</h1>
    <p class="lead">This example is a quick exercise to illustrate how the bottom navbar works.</p>
    <a class="btn btn-lg btn-primary" href="https://getbootstrap.com/docs/5.1/components/navbar/" role="button">View navbar docs »</a>
  </div>
</main>
<nav class="navbar fixed-bottom navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="https://getbootstrap.com/docs/5.1/examples/navbar-bottom/#">Bottom navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="https://getbootstrap.com/docs/5.1/examples/navbar-bottom/#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://getbootstrap.com/docs/5.1/examples/navbar-bottom/#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
        <li class="nav-item dropup">
          <a class="nav-link dropdown-toggle" href="https://getbootstrap.com/docs/5.1/examples/navbar-bottom/#" id="dropdown10" data-bs-toggle="dropdown" aria-expanded="false">Dropup</a>
          <ul class="dropdown-menu" aria-labelledby="dropdown10">
            <li><a class="dropdown-item" href="https://getbootstrap.com/docs/5.1/examples/navbar-bottom/#">Action</a></li>
            <li><a class="dropdown-item" href="https://getbootstrap.com/docs/5.1/examples/navbar-bottom/#">Another action</a></li>
            <li><a class="dropdown-item" href="https://getbootstrap.com/docs/5.1/examples/navbar-bottom/#">Something else here</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>


    <script src="../frontend/Bottom navbar example · Bootstrap v5.1_files/bootstrap.bundle.min.js.download" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      
  

</body></html>

<?php
}
?>