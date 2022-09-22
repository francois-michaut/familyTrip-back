<main class="rememberEdit">
    <h2 class="rememberEdit__title">
        Modifier ce souvenir
    </h2>
    <form class="rememberEdit__form"  action="" method="post">
        <div class="input">
            <label for="name">
                Nom du souvenir
            </label>
            <input type="text" name="name" id="name" value="<?= $param['remember']->getName() ?>" placeholder="<?= $param['remember']->getName() ?>">
        </div>
        <div class="input">
            <label for="location">
                Lieu du souvenir
            </label>
            <input type="text" name="location" id="location" value="<?= $param['remember']->getLocation() ?>" placeholder="<?= $param['remember']->getLocation() ?>">
        </div>
        <div class="input">
            <label for="date">
                Date du souvenir
            </label>
            <input
                type="text"
                name="date"
                id="date"
                value="<?php $date = date_create($param['remember']->getDate());
                echo date_format($date, 'd-m-Y')
                 ?>"
                 placeholder="<?= $param['remember']->getDate() ?>">
        </div>
        <div class="input">
            <label for="members">
                Membres présents
            </label>
            <input type="text" name="members" id="members" value="<?= $param['remember']->getMembers() ?>" placeholder="<?= $param['remember']->getMembers() ?>">
        </div>
        <div class="rememberEdit__form--button">
            <button type="submit">
                Modifier le souvenir
            </button>
        </div>
    </form>
</main>