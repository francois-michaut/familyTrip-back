<main class="tribeDelete">
    <h2 class="tribeDelete__title">
        Supprimer une tribu
    </h2>
    <form action="" class="tribeDelete__form" method="post">
        <div class="input">
            <label for="name">
                Nom de la tribu
            </label>
            <input type="text" name="name" id="name" value="<?= $param['tribe']->getName() ?>" placeholder="<?= $param['tribe']->getName() ?>">
        </div>
        <div class="input">
            <label for="id">
                Identifiant de la tribu
            </label>
            <input type="text" name="id" id="id" value="<?= $param['tribe']->getId() ?>" placeholder="<?= $param['tribe']->getId() ?>">
        </div>
        <div class="tribeDelete__form--button">
            <button type="submit">
                Supprimer cette tribu
            </button>
        </div>
    </form>
</main>