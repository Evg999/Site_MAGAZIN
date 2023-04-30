        <footer class="wrapper flex-box footer-nav space-between p-80">
            <div class="padding-30">
                <h3>КОЛЛЕКЦИИ</h3> 

                <?php
                    $connect = new Connect();
                    // делаем запрос к БД к каждой категории - получем категории, считаем каждую категорию
                    $categories = mysqli_query($connect->getConnection(), " SELECT * FROM categories");
                    // выводим в цикле , переводим к асациотивному масиву вытащили кол во,  в каждой этерации смотрим отдельную категорию
                    while($category = mysqli_fetch_assoc($categories)){
                    // считаем кол во товаров в каждой категории
                    $count =  mysqli_query($connect->getConnection(),"SELECT COUNT(*) as num FROM core_goods WHERE category_id=".$category['id']);
                    $info = mysqli_fetch_assoc($count);
                ?>

                <a href="/catalog.php?category_id=<?= $category['id'] ?>"><?= $category['title'] ?>(<?= $info['num'] ?>)</a>
                <?php } ?>

                <!-- считаем новинки -->
                <?php
                    $count =  mysqli_query($connect->getConnection(),"SELECT COUNT(*) as num FROM core_goods WHERE is_new=1");
                    $info = mysqli_fetch_assoc($count);
                ?>

                
                    <a href="/catalog.php?is_new=1">
                        Новинки (<?=$info['num']?>) 
                    </a>
                
            </div>
            <div class="padding-30">
                <h3>МАГАЗИН</h3>
                <a href="/about.php">О нас</a>
                <a href="/#">Доставка</a>
                <a href="/#">Работа с нами</a>
                <a href="/#">Контакты</a>
            </div>
            <div class="padding-30">
                <h3>МЫ В СОЦИАЛЬНЫХ СЕТЯХ</h3>
                <p>Сайт разработан <br> 
                    в ознакомительных
                 целях </p>
                <p>2023 © Все права защищены</p>
                <div class="flex-box">
                    <div class="facebook footer-social-icon"></div>
                    <div class="instagram footer-social-icon"></div>
                    <div class="linkedin footer-social-icon"></div>
                </div>
            </div>
        </footer>
        <script 
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" 
            crossorigin="anonymous">
        </script>
        <script 
            src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
	        crossorigin="anonymous">
        </script>
        <script 
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" 
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous">
        </script>
        <script 
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" 
            integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
            crossorigin="anonymous">
        </script>

        <script src="js/jquery-3.5.1.min.js"></script>

        <script src="slick/slick.min.js"></script>

        <script src="js/script.js"></script>
        
        
        <!-- <script src="js/slider2.js"></script> -->
</body>
</html>