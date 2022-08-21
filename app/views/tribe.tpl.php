<main class="tribe">
    <h2 class="tribe__title">Liste des différentes tribus</h2>
    <div class="tribe__table">
        <table>
                <thead>
                    <td>Nom de la tribu</td>
                    <td>Membres de la tribu</td>
                </thead>
                <tbody>
                 <?php foreach( $param['tribesList'] as $key => $tribe) { ?>
                    <tr class="first-row row">
                        <th><?= $tribe['name'] ?></th>
                        <th>Inconnus pour l'instant</th>
                    <?php }    ?>
                 </tr>
                </tbody>
        </table>
    </div>
</main>