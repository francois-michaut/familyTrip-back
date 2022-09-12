    <h2 class="activityEdit__title">
        Modifier cette activité
    </h2>
    <form class="activityEdit__form" action="" method="POST">
        <div class="input">
            <label for="activityType">
                Type d'activité
            </label>
            <input type="text" name="activityType" value="<?= $param['activity']->getType()?>" placeholder="<?= $param['activity']->getType()?>">
        </div>
        <div class="input">
            <label for="activityDate">
                Date de l'activité
            </label>
            <input type="date" name="activityDate" value="<?= $param['activity']->getDate()?>" placeholder="<?= $param['activity']->getDate()?>">
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
        <div class="activityEdit__form--button">
            <button type="submit">
                Modifier l'activité
            </button>
        </div>

    </form>
</main>