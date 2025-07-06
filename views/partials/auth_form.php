<div class="container p-5">
        <!------------------------------------------------ 
        Barre de navigation
        ---------------------------------------------------->
        <ul class="nav nav-pills nav-fill mb-3 p-3 rounded-3" id="pills-tab">
            <li class="nav-item ">
                <button
                    class="nav-link active"
                    id="login-tab"
                    data-bs-toggle="pill"
                    data-bs-target="#pills-login"
                    type="button">
                    Connexion
                </button>
            </li>
            <li class="nav-item">
                <button class="nav-link " id="register-tab"
                    data-bs-toggle="pill"
                    data-bs-target="#pills-register"
                    type="button">
                    Inscription
                </button>
            </li>
        </ul>
        <div class="tab-content bg-white rounded shadow p-5" id="pills-tabContent">
            <!--------------------------------------------------------------
            Formulaire de connexion
            ---------------------------------------------------------------->
            <div class="tab-pane show active" id="pills-login">
                <h2 class="h5 mb-4">Se connecter</h2>
                <form action="../../src/controllers/login_controller.php" method="post">
                    <div class="mb-3">
                        <label for="email" class="form-label">Adresse e-mail</label>
                        <input
                        type="email"
                        id="email"
                        name="email"
                        class="form-control" placeholder="votre@mail.com" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Mot de passe</label>
                        <input
                        type="password"
                        id="password"
                        name="password"
                        class="form-control" placeholder="••••••••" required>
                    </div>
                    <button class="btn btn-dark w-100" type="submit">Connexion</button>
                </form>
            </div>
            <!-------------------------------------------------------------
            Formulaire de inscription
            --------------------------------------------------------------->
            <div class="tab-pane fade" id="pills-register">
                <!----------------------------------------------------------------------------------------
                fade : fairt apparaître les onglets en fondu, ajoutez .fade à chaque onglet. Le premier volet doit également être doté de .show pour que le contenu initial soit visible.
                https://getbootstrap.com/docs/5.3/components/navs-tabs/#fade-effect   
                ---------------------------------------------------------------------------------------->
                <h2 class="h5 mb-4">Créer un compte</h2>
                <form action ="../../src/controllers/register_controller.php" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nom complet</label>
                        <input
                        type="text"
                        id="name"
                        name="name"
                        class="form-control" placeholder="Saisissez votre nom complet" required>
                    </div>
                    <div class="mb-3">
                        <label for="mail" class="form-label">Adresse e-mail</label>
                        <input
                        type="email"
                        id="mail"
                        name="mail"
                        class="form-control" placeholder="votre@mail.com" required>
                    </div>
                    <div class="mb-3">
                        <label for="password " class="form-label">Mot de passe</label>
                        <input
                        type="password"
                        id="password"
                        name="password"
                        class="form-control" placeholder="••••••••" required>
                    </div>
                    <button class="btn btn-dark w-100" type="submit">Inscription</button>
                </form>
            </div>
        </div>
    </div>