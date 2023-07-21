<!DOCTYPE html>
<html lang="en">
<head>
  <title>TodoProject_login</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <?php
  $pagename = basename($_SERVER['SCRIPT_NAME']);
  ?>

  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
          <li class="nav-item">
            <a class="nav-link <?php echo ($pagename=="login.php") ? " " :"active" ;?> " href="index.php" aria-current="page">Home <span class="visually-hidden">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo (!$pagename=="login.php") ? " " :"active" ;?> " href="login.php" aria-current="page">login <span class="visually-hidden">(current)</span></a>
          </li>
        </ul>
        <form class="d-flex my-2 my-lg-0">
        <?php echo ($pagename=="login.php") ? " " :'<a href="worksattion.php?logout=1" class="btn btn-danger px-5">logout</a>' ;?>
        

        </form>
      </div>
    </div>
  </nav>