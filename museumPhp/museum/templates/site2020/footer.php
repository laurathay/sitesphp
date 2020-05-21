<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- font awesome link -->
    <script src="https://kit.fontawesome.com/682d71be2a.js" crossorigin="anonymous"></script>

    <meta charset="utf-8">
    <title> Accueil Musée ThayThay</title>
    <!-- lien bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&family=Raleway:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
  </head>



<footer>

  <!-- la navigation et lien conditions générales et l'adresse du musée -->

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">  <img src="images/logo.png" alt="logo"> </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="artistes.php"> Artistes </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Type
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#"> Photographe </a>
            <a class="dropdown-item" href="#"> Peintre </a>
            <a class="dropdown-item" href="#"> Graveur </a>

            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="artiste.php"> LeGrosse </a> <!-- pour plus tard peut etre rajouter un truc -->
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">  <!-- pour plus tard peut etre rajouter un truc -->  </a>
        </li>
        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
        <li><a href="https://www.instagram.com/wearetelegraph/"><i class="fab fa-instagram"></i></a></li>
        <li><a href="#"><i class="far fa-envelope"></i></a></li>
      </ul>


      <i class="fas fa-map-marked-alt"></i>

      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="234 rue des pyrénées" aria-label="Search" style="width: 220px;">
        <button class="btn alert-warning my-2 my-sm-0" type="submit"> Calcul itinéraire </button>
      </form>
    </div>
  </nav>

</footer>



<!-- bootstrap links -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script src="script.js">

</script>
</body>
</html>
