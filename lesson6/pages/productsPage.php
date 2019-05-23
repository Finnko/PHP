<?php

$sql = "SELECT id, url, name, price FROM catalog";
$res = mysqli_query(connect(), $sql);


while ($row = mysqli_fetch_assoc($res)) {

    $item .= <<<php
                <div class="product-box__item" style="margin: 10px">
                        <a href="#" class="product-box__product">
                            <img src="{$row['url']}" alt="Product" class="product-box__img">
                        </a>
                        <div class="product-box__overlay d-flex">
                            <a href="#" class="product-box__add-cart">
                                Add to Cart
                            </a>
                        </div>
                        <div class="product-box__description">
                            <p class="product-box__text">{$row['name']}</p>
                            <p class="product-box__price">\${$row['price']}</p>
                        </div>
                    </div>
php;
}

$content = <<<php
<main>
    <div class="products" style="display: flex;flex-wrap: wrap">$item</div>
</main>
php;


