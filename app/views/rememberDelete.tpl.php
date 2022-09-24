<main class="rememberDelete">
    <h2 class="rememberDelete__titlte">Suppression d'un souvenir</h2>
    <form action="" method="post" class="rememberDelete__form">
        <div class="input">
            <label for="name">
                Nom du souvenir
            </label>
            <input type="text" name="name" id="name" value="<?= $param['remember']->getName()?>" placeholder="<?= $param['remember']->getName()?>">
        </div>
        <div class="input">
            <label for="location">
                Lieu du souvenir
            </label>
            <input type="text" name="location" id="location" value="<?= $param['remember']->getLocation()?>" placeholder="<?= $param['remember']->getLocation()?>">
        </div>
        <div class="input">
            <label for="date">
                Date du souvenir
            </label>
            <input type="text" name="date" id="date" value="<?= $param['remember']->getDate()?>" placeholder="<?= $param['remember']->getDate()?>">
        </div>
        <div class="input">
            <label for="members">
                Membres présents
            </label>
            <input type="text" name="members" id="members" value="<?= $param['remember']->getMembers()?>" placeholder="<?= $param['remember']->getMembers()?>">
        </div>
        <div class="rememberDelete__form--button">
            <button type="submit">
                Supprimer ce souvenir
            </button>
        </div>
    </form>
</main>