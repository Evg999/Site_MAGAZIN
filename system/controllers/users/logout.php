<?php
// для кнопки Выход

setcookie('user_id',0,time() - 3600,'/');// убиваем куки
header('Location: https://mag24-shop.ru/catalog.php');// редерект в каталог
?>