<DOCTYPE>
<lang="fr">
<head>

<meta charset="utf-8">

<!-- Titre de la Page -->
<title>Aurora Infinity | LogIn - SignIn</title>

<!-- Intégration de la favicon -->
<link rel="website icon" type="png" href="images/favicon.png">

<!-- Intégration CSS -->
<link rel="stylesheet" href="cssfile/login.css">

</head>

<body>

<main class="main">
  <div class="container">
    <section class="wrapper">
      <div class="heading">
        <h1 class="text text-large">Inscription</h1>
        <p class="text text-normal">Déjà membre ?<span><a href="login.php" class="text text-links"> Connectez-vous !</a></span>
        </p>
      </div>
      <form name="signin" class="form">
      <div class="input-control">
          <label for="nom" class="input-label" hidden>Nom Prénom</label>
          <input type="text" name="text" id="text" class="input-field" placeholder="Votre Nom et Prénom">
        </div>
        <div class="input-control">
          <label for="email" class="input-label" hidden>Email</label>
          <input type="email" name="email" id="email" class="input-field" placeholder="Votre Email">
        </div>
        <div class="input-control">
          <label for="password" class="input-label" hidden>Mot de Passe</label>
          <input type="password" name="password" id="password" class="input-field" placeholder="Votre Mot de Passe">
        </div>
        <div class="input-control">
          <label for="password" class="input-label" hidden>Confirmez votre Mot de Passe</label>
          <input type="password" name="password" id="password" class="input-field" placeholder="Confirmez votre Mot de Passe">
        </div>
        <div class="input-control">
        <a href="main.php" class="text text-links">Retour à l'Accueil</a>
          <input type="submit" name="submit" class="input-submit" value="S'enregistrer" disabled>
        </div>
      </form>
      <div class="striped">
        <span class="striped-line"></span>
        <span class="striped-text">Ou</span>
        <span class="striped-line"></span>
      </div>
      <div class="method">
        <div class="method-control">
          <a href="#" class="method-action">
            <i class="ion ion-logo-google"></i>
            <span>Connectez vous avec Google</span>
          </a>
        </div>
        <div class="method-control">
          <a href="#" class="method-action">
            <i class="ion ion-logo-apple"></i>
            <span>Connectez vous avec Apple</span>
          </a>
        </div>
      </div>
    </section>
  </div>
</main>

<!-- Intégration JavaScript -->
<script src="js/login.js"></script>   

</body>
