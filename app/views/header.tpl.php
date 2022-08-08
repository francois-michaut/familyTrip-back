<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $_SERVER['BASE_URI']?>/assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">    
    <title>Back-Office de Family Trip</title>
</head>
<body>
    <header class="header">
        <h1 class="header__title"><a href="<?= $_SERVER['BASE_URI']?>/">Back-Office de Family Trip</a></h1>
        <nav class="header__navbar">
            <ul class="header__navbar-list">
                <li><a href="<?= $_SERVER['BASE_URI']?>/activity">Activités</a></li>
                <li><a href="<?= $_SERVER['BASE_URI']?>/shoppinglist">Shoppinglist</a></li>
                <li><a href="#">Souvenirs</a></li>
                <li><a href="#">Tribus</a></li>
                <li><a href="<?= $_SERVER['BASE_URI']?>/user">Membres</a></li>
            </ul>
        </nav>
    </header>
