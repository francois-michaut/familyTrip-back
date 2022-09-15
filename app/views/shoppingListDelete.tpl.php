<main class="shoppingListDelete">
    <h2 class="shoppingListDelete__title">Supprimer cette activité</h2>
    <form action="" method="post" class="shoppingListDelete__form">
        <div class="input">
            <label for="list">
                Contenu de la liste
            </label>
            <input type="text" name="list" id="list" value="<?= $param['shoppingList']->getList()?>" placeholder="<?= $param['shoppingList']->getList()?>">
        </div>
        <div class="input">
            <label for="tribeId">
                Nom de la tribu
            </label>
            <input type="text" name="tribeId" id="tribeId" value="<?= $param['shoppingList']->getTribeId()?>" placeholder="<?= $param['shoppingList']->getTribeId()?>">
        </div>
        <div class="shoppingListDelete__form--button">
            <button type="submit">
                Supprimer cette shopping liste
            </button>
        </div>
    </form>
</main>