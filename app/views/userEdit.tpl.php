<main class="userEdit">
    <h2 class="userEdit__title">
        Modifier un utilisateur
    </h2>
    <form action="" method="post" class="userEdit__form">
        <div class="input">
            <label for="firstname">
                Prénom de l'utilisateur
            </label>
            <input type="text" name="firstname" id="firstname" value="<?= $param['user']->getFirstname() ?>" placeholder="<?= $param['user']->getFirstname() ?>">
        </div>
        <div class="input">
            <label for="lastname">
                Nom de l'utilisateur
            </label>
            <input type="text" name="lastname" id="lastname" value="<?= $param['user']->getLastname() ?>" placeholder="<?= $param['user']->getLastname() ?>">
        </div>
        <div class="input">
            <label for="email">
                Mail de l'utilisateur
            </label>
            <input type="email" name="email" id="email" value="<?= $param['user']->getEmail() ?>" placeholder="<?= $param['user']->getEmail() ?>">
        </div>
        <div class="userEdit__form--button">
            <button type="submit">
                Modifier l'utilisateur
            </button>
        </div>
    </form>
</main>