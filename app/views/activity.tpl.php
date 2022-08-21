<main class="activity">
    <h2 class="activity__title">Liste des différentes activités</h2>
    <div class="activity__table">
        <table>
            <thead>
                <td>Type</td>
                <td>Date</td>
                <td>Lieu</td>
                <td>Horaires</td>
                <td>Infos utiles</td>
            </thead>
            <tbody>
                <?php foreach( $param['activitiesList'] as $key => $activity ) { ?>
                    <tr class="first-row row">
                        <th><?= $activity['type'] ?></th>
                        <th><?= $activity['date'] ?></th>
                        <th><?= $activity['location']?></th>
                        <th><?= $activity['hourly'] ?></th>
                        <th><?= $activity['more'] ?></th>
                    </tr>

               <?php } ?>
            </tbody>
        </table>
    </div>
</main>