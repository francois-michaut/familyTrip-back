<main class="shoppinglist">
    <h2 class="shoppinglist__title">
        Liste des différentes shoppinglist
    </h2>
    <div class="shoppinglist__table">
        <table>
                <thead>
                    <td>Nom de la tribu</td>
                    <td>Liste</td>
                </thead>
                <tbody>
                    <?php foreach( $param['shoppingListsList'] as $key => $shoppingList) { ?>
                        <tr class="first-row row">
                            <th>Inconnue</th>
                            <th><?= $shoppingList['list'] ?></th>
                        </tr>
                   <?php } ?>
                </tbody>
        </table>
    </div>
</main>