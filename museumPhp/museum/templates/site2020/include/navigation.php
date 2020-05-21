<!-- nav et bar de recherche avec bootstrap -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">  <img src="templates/site2020/images/logo.png" alt="logo"> </a>
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
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn alert-warning my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
