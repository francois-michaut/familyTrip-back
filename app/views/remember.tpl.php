<main class="remember">
    <h2 class="remember__title">Liste des différents souvenirs</h2>
    <div class="remember__table">
        <table>
                <thead>
                    <td>Nom du souvenir</td>
                    <td>Lieu</td>
                    <td>Date</td>
                    <td>Personnes présentes</td>
                </thead> 
                <tbody>
                    <?php foreach( $param['remembersList'] as $key => $remember) { ?>
                        <tr class="first-row row">
                            <th><?= $remember['name']?></th>
                            <th><?= $remember['location']?></th>
                            <th><?= $remember['date']?></th>
                            <th>Inconnu</th>
                        </tr>
                   <?php } ?>
                </tbody>
        </table>
    </div>
</main>