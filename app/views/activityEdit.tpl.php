<main class="activityEdit">
    <?php dump($param) ?>
    <h2 class="activityEdit__title">
        Modifier cette activité
    </h2>
    <section class="activityEdit__section">
        <div class="input">
            <label for="activityType">
                Type d'activité
            </label>
            <input type="text" placeholder="<?= $param['activity']->getType()?>">
        </div>
        <div class="input">
            <label for="activityDate">
                Date de l'activité
            </label>
            <input type="date" value="<?= $param['activity']->getDate()?>">
        </div>
        <div class="input">
            <label for="activityLocation">
                Lieu de l'activité
            </label>
            <input type="text" placeholder="<?= $param['activity']->getLocation()?>">
        </div>
        <div class="input">
            <label for="activityHourly">
                Horaires de l'activité
            </label>
            <input type="text" placeholder="<?= $param['activity']->getHourly()?>">
        </div>
        <div class="input">
            <label for="activityMore">
                Infos supplémentaires
            </label>
            <input type="text" placeholder="<?= $param['activity']->getMore()?>">
        </div>
        <div class="activityEdit__section--button">
            <button type="submit">
                Modifier l'activité
            </button>
        </div>

    </section>
</main>