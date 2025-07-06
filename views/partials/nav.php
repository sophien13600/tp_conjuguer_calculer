<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid p-3">
      <div class = "d-flex flex-column">
          <h3>
              <span class="navbar-text">
                  Tableau de bord
                </span>
            </h3>
            <p class="navbar-text">Vue d'ensemble de votre activité</p>
        </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Conjuguer et calculer</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../views/dashboard.php">Tableau de bord</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../views/conjugaison.php">Conjugaison</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Calculatrice</a>
          </li>
          <a href="../src/controllers/login_controller.php">

              <button type="button" class="btn btn-light lg">Se deconnecter</button>
            </a>
      </div>
    </div>
  </div>
</nav>