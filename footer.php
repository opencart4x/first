</main>
<footer class="container">
    <div class="row">
        <div id="logo" class="col-xs-12 col-sm-2 col-md-2">
            <img src="image/logo.png">
        </div>
        <div id="menu" class="col-xs-12 col-sm-10 col-md-10">
            <nav>
                <ul class="text-right">
                    <?php
                    $menu = ['Новости', 'Продукция', 'Сервис', 'Контакт-центры'];
                    foreach ($menu as $item){
                        echo '<li><a href="#">' . $item . '</a></li>';
                    }
                    ?>
                </ul>
            </nav>
        </div>
    </div>
</footer>
</body>
</html>
