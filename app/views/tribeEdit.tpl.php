<main class="tribeEdit">
    <h2 class="tribeEdit__title">
        Modifier cette tribu
    </h2>
    <form action="" method="post" class="tribeEdit__form">
        <div class="input">
            <label for="name">
                Nom de la tribu
            </label>
            <input type="text" name="name" value="<?= $param['tribe']->getName() ?>" placeholder="<?= $param['tribe']->getName() ?>">
        </div>
        <div class="input">
            <label for="id">
                Identifiant de la tribu
            </label>
            <input type="text" name="id" value="<?= $param['tribe']->getId() ?>" placeholder="<?= $param['tribe']->getId() ?>">
        </div>
        <div class="tribeEdit__form--button">
            <button type="submit">
                Modifier la tribu
            </button>
        </div>
    </form>
</main>