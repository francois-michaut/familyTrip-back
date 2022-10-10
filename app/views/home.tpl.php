<main class="home">
    <h2 class="home__title">
      <?php if(isset($_SESSION['user'])){
         echo('Bienvenue '. $_SESSION['user']->getPseudo());
        } else{
          echo('      C\'est ici que vous pouvez gérer vos Tribus  et leur différentes données.
          ');
        }?>
    </h2>
    <form action="" method="post" class="home__connexion">
        <label for="email">Votre email</label>
        <input class="connexion__input" name="email" type="text" placeholder="kiki" id="email">
        <label for="password">Votre mot de passe</label>
        <input class="connexion__input" name="password" type="password" placeholder="password" id="password">
        <button class="connexion__button" type="submit">Se connecter</button>
    </form>
</main>