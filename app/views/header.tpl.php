<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $assetsBaseUri?>css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">    
    <title>Back-Office de Family Trip</title>
</head>
<body>
    <header class="header">
        <h1 class="header__title"><a href="<?= $router->generate('home')?>">Back-Office de Family Trip</a></h1>
        <nav class="header__navbar">
            <ul class="header__navbar-list">
                <li><a href="<?= $router->generate('activity') ?>">Activités</a></li>
                <li><a href="<?= $router->generate('shoppinglist') ?>">Shoppinglist</a></li>
                <li><a href="<?= $router->generate('remember') ?>">Souvenirs</a></li>
                <li><a href="<?= $router->generate('tribe') ?>">Tribus</a></li>
                <li><a href="<?= $router->generate('user') ?>">Membres</a></li>
            </ul>
        </nav>
    </header>
