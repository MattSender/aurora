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
        <h1 class="text text-large">Mot de passe Oublié ?</h1>
        <p class="text text-normal">Vous l'avez retouvé ?<span><a href="login.php" class="text text-links"> Connectez-vous !</a></span>
        </p>
      </div>
      <form name="signin" class="form">
        <div class="input-control">
          <label for="email" class="input-label" hidden>Email </label>
          <input type="email" name="email" id="email" class="input-field" placeholder="Email">
        </div>
        <div class="input-control">
        <a href="login.php" class="text text-links">Retour à l'Accueil</a>
          <input type="submit" name="submit" class="input-submit" value="Envoyer" disabled>
        </div>
      </form>
    </section>
  </div>
</main>

<!-- Intégration JavaScript -->
<script src="js/login.js"></script>   

</body>
