<?php
function index() {
    $sql = "SELECT id, url, name, price FROM catalog";
    $res = mysqli_query(connect(), $sql);
    $content = '<h1>Каталог товаров</h1>';
    while ($row = mysqli_fetch_assoc($res)) {
        $item .= <<<php
        <div class="product" style="margin: 30px;">
              <img src="{$row['url']}" alt="{$row['name']}" width="175" height="175">
              <h3 class="product__title">{$row['name']}</h3>
              <p class="product__price">{$row['price']}</p>
              <br>
              <a href="?page=product&id={$row['id']}">Подробнее</a>
              <a href="?page=catalog&id={$row['id']}&func=addCart">Добавить в корзину</a>
        </div>
php;
    }
    $content .= <<<php
    <div class="products" style="width: 1100px; display: flex; flex-wrap: wrap">$item</div>
php;
    return $content;
}
function addCart(){
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $id = (int)$_GET['id'];
        $sql = "SELECT id, url, name, price 
                FROM catalog 
                WHERE id = '$id'";
        $res = mysqli_query(connect(), $sql);
        $row = mysqli_fetch_assoc($res);
        if (!empty($_SESSION['cart'][$row['id']])){
            $_SESSION['cart'][$row['id']]['quantity']++;
        } else {
            $_SESSION['cart'][$row['id']] = $row;
            $_SESSION['cart'][$row['id']]['quantity'] = 1;
        }
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
    exit;
}
php;


