<main class="user">
    <h2 class="user__title">Liste des différents utilisateurs</h2>
    <div class="user__table">
        <table>
            <thead>
                <td>Nom</td>
                <td>Prénom</td>
                <td>Email</td>
            </thead>
            <tbody>
            <?php foreach( $param['userList'] as $key => $user) { ?>
                <tr class="first-row row">
                        <th><?= $user['lastname'] ?></th>
                        <th><?= $user['firstname']?></th>
                        <th><?= $user['email']?></th>
                   <?php } ?>
                </tr>
            </tbody>
        </table>
    </div>
</main>