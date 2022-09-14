<main class="shoppingListEdit">
    <!-- <?= dump($param['shoppingList']->getList())?> -->
    <h2 class="shoppingListEdit__title">Modifier cette shoppingList</h2>
    <form action="" method="post" class="shoppingListEdit__form">
        <div class="input">
            <label for="shoppingListContent">
                Contenu de la liste
            </label>
            <input type="textarea" name="shoppingListContent" id="shoppingListContent" value="<?= strval($param['shoppingList']->getList())       
            ?>" placeholder="<?= $param['shoppingList']->getList()?>">
        </div>
        <div class="input">
            <label for="shoppingListTribeName">
                Nom de la tribu
            </label>
            <input type="text" name="shoppingListTribeName" id="shoppingListTribeName" value="<?= $param['shoppingList']->getId()?>" placholder="<?= $param['shoppingList']->getId()?>">
        </div>
        <div class="shoppingListEdit__form--button">
            <button type="submit">
                Modifier l'activité
            </button>
        </div>
    </form>
</main>