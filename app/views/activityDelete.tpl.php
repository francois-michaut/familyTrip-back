<main>
    <h2 class="activityDelete__title">
        Supprimer cette activité
    </h2>
    <form class="activityDelete__form" action="" method="post">
        <div class="input">
            <label for="activityType">
                Type d'activité
            </label>
            <input type="text" name="activityType" value="<?= $param['activity']->getType()?>">
        </div>
        <div class="input">
            <label for="activityDate">
                Date de l'activité
            </label>
            <input type="text" name="activityDate" value="<?php
                $date = date_create($param['activity']->getDate());
                echo date_format($date, 'Y-m-d')
                ?>" placeholder="<?=$param['activity']->getDate()?>">
        </div>
        <div class="input">
            <label for="activityLocation">
                Lieu de l'activité
            </label>
            <input type="text" name="activityLocation" value="<?= $param['activity']->getLocation()?>" placeholder="<?= $param['activity']->getLocation()?>">
        </div>
        <div class="input">
            <label for="activityHourly">
                Horaires de l'activité
            </label>
            <input type="text" name="activityHourly" value="<?= $param['activity']->getHourly()?>" placeholder="<?= $param['activity']->getHourly()?>">
        </div>
        <div class="input">
            <label for="activityMore">
                Infos supplémentaires
            </label>
            <input type="text" name="activityMore" value="<?= $param['activity']->getMore()?>" placeholder="<?= $param['activity']->getMore()?>">
        </div>
        <div class="activityDelete__form--button">
            <button type="submit">
                Supprimer l'activité
            </button>
        </div>
    </form>
</main>