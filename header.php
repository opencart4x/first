<!doctype html>
<html lang=ru>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Sait</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>
<header class="container">
    <div class="row">
        <div id="logo" class="col-xs-12 col-sm-2 col-md-2">
            <img src="image/logo.png">
        </div>
        <div id="search" class="col-xs-12 col-sm-3 col-md-3">
            <input type="text" name="search" placeholder="Поиск">
        </div>
        <div id="menu" class="col-xs-12 col-sm-7 col-md-7">
            <nav>
                <ul class="text-right">
                    <?php
                    $menu = ['Новости', 'Продукция', 'Сервис', 'Контакт-центры'];
                    foreach ($menu as $menu){
                        echo '<li><a href="#">' . $menu . '</a></li>';
                    }
                    ?>
                </ul>
            </nav>
        </div>
    </div>
</header>
<main class="container">
    <section class="slideshow">
        <div>
            <img src="image/slide.png">
        </div>
    </section>