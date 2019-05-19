<?php

$link = mysqli_connect(
    'localhost',
    'root',
    '',
    'gbphp',
    '8888'
);
var_dump($link);

$sql = "SELECT id, url, name, count FROM gallery ORDER BY gallery . count DESC";
$res = mysqli_query($link, $sql);

echo '<div class="gallery" style="width: 800px; display: flex; flex-wrap: wrap; margin: 50px auto">';

while ($row = mysqli_fetch_assoc($res)) {
    $html .= <<<php
        <a href="photo.php?id={$row['id']}" target="_blank">
            <img src="{$row['url']}" alt="{$row['name']}" title="{$row['name']}" width="200" height="150">
        </a>
    
php;
}
echo $html;
echo '</div>';